# Author Joshua Callahan
# Personal Informatics
# A3

import numpy as np
import csv
import sys
from scipy import stats
from sklearn import linear_model
from sklearn import tree
from sklearn import neighbors
from sklearn import svm

def collect_all_data():
	walking_training_data, walking_test_data = analyze_file_data('walking.csv')
	driving_training_data, driving_test_data = analyze_file_data('driving.csv')
	stairs_training_data, stairs_test_data = analyze_file_data('stairs.csv')
	sitting_training_data, sitting_test_data = analyze_file_data('sitting.csv')
	running_training_data, running_test_data = analyze_file_data('running.csv')
	training_stats = [walking_training_data, driving_training_data, stairs_training_data, sitting_training_data, running_training_data]
	test_stats = [walking_test_data, driving_test_data, stairs_test_data, sitting_test_data, running_test_data]
	return training_stats, test_stats

def analyze_file_data(filename):
	training_data, test_data = read_in_file(filename)
	x_training_features = analyze_axis_data(training_data[0])
	y_training_features = analyze_axis_data(training_data[1])
	z_training_features = analyze_axis_data(training_data[2])
	x_test_features = analyze_axis_data(test_data[0])
	y_test_features = analyze_axis_data(test_data[1])
	z_test_features = analyze_axis_data(test_data[2])
	file_training_statistics = []
	file_test_statistics = []

	for i in range(len(x_training_features)):
		file_training_statistics.append([x_training_features[i], y_training_features[i], z_training_features[i]])
	
	for i in range(len(x_test_features)):
		file_test_statistics.append([x_test_features[i], y_test_features[i], z_test_features[i]])
	
	return file_training_statistics, file_test_statistics

def analyze_axis_data(axis_data):
	means = calculate_means(axis_data)
	std_devs = calculate_std_dev(axis_data)
	medians = calculate_medians(axis_data)
	skews = calculate_skews(axis_data)
	return medians

def calculate_means(axis_data):
	means = []
	for interval in axis_data:
		means.append(np.mean(interval))
	return means

def calculate_medians(axis_data):
	medians = []
	for interval in axis_data:
		medians.append(np.median(interval))
	return medians

def calculate_std_dev(axis_data):
	std_devs = []
	for interval in axis_data:
		std_devs.append(np.std(interval))
	return std_devs

def calculate_skews(axis_data):
	skews = []
	for interval in axis_data:
		skews.append(stats.skew(interval))
	return skews

def read_in_file(filename):
	with open(filename) as f:
		x_accl = []
		y_accl = []
		z_accl = []
		reader = csv.reader(f)
		i = 0
		for row in reader:
			if i < 30000:
				if (row[10] != '' and row[10] != 'user_acc_x(G)'):
					x_accl.append(row[10].strip())
					y_accl.append(row[11].strip())
					z_accl.append(row[12].strip())
					i = i + 1	
		x_accl = np.array(x_accl).astype(np.float)
		y_accl = np.array(y_accl).astype(np.float)
		z_accl = np.array(z_accl).astype(np.float)
		x_intervals = np.split(x_accl, 30)
		y_intervals = np.split(y_accl, 30)
		z_intervals = np.split(z_accl, 30)
		training_data = [x_intervals[:24], y_intervals[:24], z_intervals[:24]]
		test_data = [x_intervals[24:], y_intervals[24:], z_intervals[24:]]
		return training_data, test_data

def decision_tree_classifier(fit_input, test_input, categories):

	clf = tree.DecisionTreeClassifier()

	for data_point in fit_input:
		clf = clf.fit(data_point, categories)

	print('\nDECISION TREE CLASSIFICATION')
	print('Expected Results:')
	print(categories)
	print('Actual Results:')
	for i in range(len(test_input)):
		print(clf.predict(test_input[i]))

def logistic_regression(fit_input, test_input, categories):

	lr = linear_model.LogisticRegression()

	for data_point in fit_input:
		lr = lr.fit(data_point, categories)

	print('\nLOGISTIC REGRESSION')
	print('Expected Results:')
	print(categories)
	print('Actual Results:')
	for i in range(len(test_input)):
		print(lr.predict(test_input[i]))

def k_nearest_neighbors(fit_input, test_input, categories):

	knn = neighbors.KNeighborsClassifier()

	for data_point in fit_input:
		knn = knn.fit(data_point, categories)

	print('\nK-NEAREST NEIGHBORS')
	print('Expected Results:')
	print(categories)
	print('Actual Results:')
	for i in range(len(test_input)):
		print(knn.predict(test_input[i]))

def support_vector_machines(fit_input, test_input, categories):

	svc = svm.SVC(kernel='linear')

	for data_point in fit_input:
		svc = svc.fit(data_point, categories)

	print('\nSUPPORT VECTOR MACHINES')
	print('Expected Results:')
	print(categories)
	print('Actual Results:')
	for i in range(len(test_input)):
		svc(svc.predict(test_input[i]))

def main():

	training_data, test_data = collect_all_data();
	fit_input = []
	for i in range(len(training_data[0])):
		fit_input.append([training_data[0][i],training_data[1][i],training_data[2][i],training_data[3][i],training_data[4][i]])
	
	test_input = []
	for i in range(len(test_data[0])):
		test_input.append([test_data[0][i],test_data[1][i],test_data[2][i],test_data[3][i],test_data[4][i]])
	
	categories = ['walking', 'driving', 'stairs', 'sitting', 'running']

	decision_tree_classifier(fit_input, test_input, categories);
	logistic_regression(fit_input, test_input, categories);
	k_nearest_neighbors(fit_input, test_input, categories);
	#support_vector_machines(fit_input, test_input, categories);

if __name__ == '__main__':
    main()
