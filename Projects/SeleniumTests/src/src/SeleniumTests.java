package src;

import java.util.concurrent.TimeUnit;

import org.junit.*;

import static org.junit.Assert.*;
import org.openqa.selenium.*;
import org.openqa.selenium.firefox.FirefoxDriver;
import org.openqa.selenium.support.ui.Select;

public class SeleniumTests {
  private WebDriver driver;
  private String baseUrl;
  private StringBuffer verificationErrors = new StringBuffer();

  @Before
  public void setUp() throws Exception {
	driver = new FirefoxDriver();
    baseUrl = "https://uofu-cs4540-15.westus.cloudapp.azure.com/";
    driver.manage().timeouts().implicitlyWait(30, TimeUnit.SECONDS);
  }
/**
 * Tests a regular user, Jonny, logging in. Tests to make sure the correct name is displayed.
 * @throws Exception
 */
  @Test
  public void testUserLogin() throws Exception {

	    driver.get(baseUrl + "/");
	    driver.findElement(By.linkText("Projects")).click();
	    driver.findElement(By.linkText("V7")).click();
	    driver.findElement(By.linkText("Sign in")).click();
	    driver.findElement(By.id("inputEmail")).clear();
	    driver.findElement(By.id("inputEmail")).sendKeys("jonny");
	    driver.findElement(By.id("inputPassword")).clear();
	    driver.findElement(By.id("inputPassword")).sendKeys("password");
	    driver.findElement(By.xpath("//button[@type='submit']")).click();
	    WebElement welcome = driver.findElement(By.id("title"));
	    assertEquals("Welcome Jonny", welcome.getText());
	    WebElement footer = driver.findElement(By.id("footer"));
	    assertEquals("University of Utah School of Computing", footer.getText());
  }
  /**
   * Logs in as the DGS and tests to make sure the buttons make AJAX calls to display the charts
   * @throws Exception
   */
  @Test
  public void testDGSPage() throws Exception {

	  	driver.get(baseUrl + "/");
	    driver.findElement(By.linkText("Projects")).click();
	    driver.findElement(By.linkText("V7")).click();
	    driver.findElement(By.linkText("Sign in")).click();
	    driver.findElement(By.id("inputEmail")).clear();
	    driver.findElement(By.id("inputEmail")).sendKeys("dgs");
	    driver.findElement(By.id("inputPassword")).clear();
	    driver.findElement(By.id("inputPassword")).sendKeys("graduation");
	    driver.findElement(By.xpath("//button[@type='submit']")).click();
	    driver.findElement(By.cssSelector("input[type=\"submit\"]")).click();
	    driver.findElement(By.cssSelector("input[type=\"submit\"]")).click();
	    driver.findElement(By.cssSelector("input[type=\"submit\"]")).click();
	    WebElement welcome = driver.findElement(By.id("title"));
	    assertTrue(welcome.getText().contains("Welcome Sneha Kasera"));
	    WebElement distributionChartTitle = driver.findElement(By.className("highcharts-title"));
	    assertEquals("Student Success by Advisor", distributionChartTitle.getText());
	    WebElement distributionAxisTitle = driver.findElement(By.className("highcharts-yaxis-title"));
	    assertEquals("Status of Students Assigned to Advisor", distributionAxisTitle.getText());

  }
  /**
   * Logs in as Tim Duncan and creates a new progress form.  Checks the form for accuracy.
   * @throws Exception
   */
  @Test
  public void testNewForm() throws Exception {

		driver.get(baseUrl + "/");
		driver.findElement(By.linkText("Projects")).click();
		driver.findElement(By.linkText("V7")).click();
		driver.findElement(By.linkText("Sign in")).click();
		driver.findElement(By.id("inputEmail")).clear();
		driver.findElement(By.id("inputEmail")).sendKeys("tim");
		driver.findElement(By.id("inputPassword")).clear();
		driver.findElement(By.id("inputPassword")).sendKeys("duncanness");
		driver.findElement(By.xpath("//button[@type='submit']")).click();
		driver.findElement(By.linkText("Create New Form")).click();
		driver.findElement(By.name("numSemesters")).clear();
		driver.findElement(By.name("numSemesters")).sendKeys("5");
		driver.findElement(By.name("advisor")).clear();
		driver.findElement(By.name("advisor")).sendKeys("Vicki Jackson");
		driver.findElement(By.name("committeeMember1")).clear();
		driver.findElement(By.name("committeeMember1")).sendKeys("Kevin Durant");
		driver.findElement(By.name("committeeMember2")).clear();
		driver.findElement(By.name("committeeMember2")).sendKeys("Prof Jim");
		driver.findElement(By.name("identifyAdvisor")).click();
		driver.findElement(By.name("programAdvisorApproved")).click();
		driver.findElement(By.name("teachingMentorship")).click();
		new Select(driver.findElement(By.name("identifyAdvisorSemester"))).selectByVisibleText("Spring 2017");
		new Select(driver.findElement(By.name("programAdvisorApprovedSemester"))).selectByVisibleText("Spring 2017");
		new Select(driver.findElement(By.name("teachingMentorshipSemester"))).selectByVisibleText("Spring 2017");
		new Select(driver.findElement(By.name("identifyAdvisorSemester"))).selectByVisibleText("Fall 2016");
		new Select(driver.findElement(By.name("requiredClassesSemester"))).selectByVisibleText("Fall 2017");
		new Select(driver.findElement(By.name("fullCommitteeFormedSemester"))).selectByVisibleText("Spring 2018");
		new Select(driver.findElement(By.name("programCommitteeApprovedSemester"))).selectByVisibleText("Spring 2018");
		new Select(driver.findElement(By.name("writtenQualifierSemester"))).selectByVisibleText("Fall 2018");
		new Select(driver.findElement(By.name("proposalSemester"))).selectByVisibleText("Spring 2019");
		new Select(driver.findElement(By.name("dissertationDefenseSemester"))).selectByVisibleText("Spring 2019");
		new Select(driver.findElement(By.name("finalDocumentSemester"))).selectByVisibleText("Spring 2019");
		driver.findElement(By.name("notes")).clear();
		driver.findElement(By.name("notes")).sendKeys("This is a selenium test");
		driver.findElement(By.name("certifyValidity")).click();
		driver.findElement(By.id("submit")).click();
		driver.findElement(By.linkText("Return to My Profile")).click();
		driver.findElement(By.linkText("2016-04-08 04:42:45")).click();
		WebElement name = driver.findElement(By.id("section"));
	    assertTrue(name.getText().contains("Student Name: Tim Duncan"));
	    assertTrue(name.getText().contains("Spring 2019 Final document"));
	  
  }

  @After
  public void tearDown() throws Exception {
    driver.quit();
    String verificationErrorString = verificationErrors.toString();
    if (!"".equals(verificationErrorString)) {
      fail(verificationErrorString);
    }
  }
}

