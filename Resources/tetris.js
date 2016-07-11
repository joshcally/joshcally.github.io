

var color_array = [0xff0000, 0x00ff00, 0x0000ff, 0xc44dff, 0x4dffff, 0xffff66, 0xffad33];
var color_index = Math.floor((Math.random() * 7));
var timer_descend;
var score = 0;
var initialTime = 550;
var themesong = document.getElementById("themesong");
var click = document.getElementById("click");
var laser = document.getElementById("laser");
var level = 1;

class Piece {
    constructor(container, i, j) {
        if (color_index == 0) {
            this.values = [
                [0, 0],
                [0, 1],
                [1, 0],
                [1, 1]
            ]

            this.shape = "square";
        } else if(color_index == 1)
        {
            this.values = [
                [0, 0],
                [0, 1],
                [1, 1],
                [1, 2]
            ]

            this.shape = "sBlock";
        }
        else if(color_index == 2) {
            this.values = [
            [1,0],
            [1,1],
            [0,1],
            [0,2]
         ]

         this.shape = "zBlock";
        }
        else if(color_index == 3) {
            this.values = [
            [0,0],
            [0,1],
            [0,2],
            [1,2]
         ]

         this.shape = "lBlock";
        }
        else if(color_index == 4) {
            this.values = [
            [1,0],
            [1,1],
            [1,2],
            [0,2]
         ]

         this.shape = "backwardLBlock";
        }
        else if(color_index == 5) {
            this.values = [
            [0,0],
            [0,1],
            [0,2],
            [0,3]
         ]

         this.shape = "lineBlock";
        }
        else {
            this.values = [
            [0,0],
            [0,1],
            [1,1],
            [0,2]
         ]

        this.shape = "tBlock";

        }


        this.i = Math.floor((Math.random() * 9));
        this.j = 0;
        this.color = color_array[color_index];
        color_index = Math.floor((Math.random() * 7));
}


    down() {
        this.j++
    }
    up() {
        this.j--
    }
    left() {
        this.i--;
        if (this.i < 0) {
            this.i = 0
        }
    }
    right() {
        this.i++;
        if (this.i > 9) {
            this.i = 9
        }
    }


    rotate()
    {

        if(this.shape === "lineBlock")
        {
            for(var i = 0; i < 4; i++)
            {
                var temp = this.values[i][0];
                this.values[i][0] = this.values[i][1];
                this.values[i][1] = temp;
            }    
        }
        else if(this.shape === "square"){}
        else{
            for(var i = 0; i < 4; i++)
            {

            this.values[i][1] = -this.values[i][1];

            var temp = this.values[i][0];
            this.values[i][0] = -this.values[i][1];
            this.values[i][1] = temp;

            this.values[i][1] = -this.values[i][1];

            }
        }

    }

    unrotate()
    {
        for(var k = 0; k < 3; k++)
        {
            if(this.shape === "lineBlock")
            {
                for(var i = 0; i < 4; i++)
                {
                    var temp = this.values[i][0];
                    this.values[i][0] = this.values[i][1];
                    this.values[i][1] = temp;
                }    
            }
            else if(this.shape === "square"){}
            else {
                for(var i = 0; i < 4; i++)
                {

                this.values[i][1] = -this.values[i][1];

                var temp = this.values[i][0];
                this.values[i][0] = -this.values[i][1];
                this.values[i][1] = temp;

                this.values[i][1] = -this.values[i][1];

                }
            }
        }

    }

    draw(matrix) {
        for (var i = 0; i < this.values.length; i++) {
            var cell = matrix[this.i + this.values[i][0]][this.j + this.values[i][1]];
            cell.visible = true;
            cell.color = this.color;
            cell.draw()
        }
    }
    fill(matrix) {
        for (var i = 0; i < this.values.length; i++) {
            var cell = matrix[this.i + this.values[i][0]][this.j + this.values[i][1]];
            cell.visible = true;
            cell.color = this.color;
            cell.filled = true;
            cell.draw()
        }
    }
        losingConflict(matrix) {
        try{
            if(this.j === 0){
            for (var i = 0; i < this.values.length; i++) {
                var i_offset = this.i + this.values[i][0];
                var j_offset = this.j + this.values[i][1];
                if (j_offset >= 20) return true;
                var cell = matrix[i_offset][j_offset];
                console.log(cell);
                if (cell === undefined || cell.filled) 
                    return true;
            }
        }
    }
        catch(err)
        {
            return true;
        }
        return false;
    }
    conflict(matrix) {
        try{
        for (var i = 0; i < this.values.length; i++) {
            var i_offset = this.i + this.values[i][0];
            var j_offset = this.j + this.values[i][1];
            if (j_offset >= 20) return true;
            var cell = matrix[i_offset][j_offset];
            console.log(cell);
            if (cell === undefined || cell.filled) 
                return true;
        }
}
        catch(err)
        {
            return true;
        }
        return false;
    }
}
class Cell {
    constructor(container, i, j) {
        this.square = new PIXI.Graphics();
        container.addChild(this.square);
        this.square.x = i * 25;
        this.square.y = j * 25;
        this.square.mouseover = function() {
            console.log("mouse over")
        };
        this.filled = false;
        this.color = 0xffffff
    }
    draw() {
        this.square.clear();
        this.square.beginFill(this.color);
        this.square.drawRect(0, 0, 25, 25);
        this.square.endFill()
    }
    set visible(value) {
        this.square.visible = value
    }
}
class SplashPage {
    constructor(stage) {
        this.board = new PIXI.Sprite();
        this.outline = new PIXI.Graphics();
        this.outline.interactive = true;
        this.outline.on('mousedown', start_game);
        this.board.x = 50;
        this.board.y = 50;
        this.board.addChild(this.outline);
        this.draw_outline();
        
        var style = {
            font : 'bold italic 65px Arial',
            fill : '#FF1E00',
            stroke : '#003660',
            strokeThickness : 8,
            dropShadow : true,
            dropShadowColor : '#000000',
            dropShadowAngle : Math.PI / 6,
            dropShadowDistance : 6,
            wordWrap : true,
            wordWrapWidth : 440
        };
        var title = new PIXI.Text('TETRIS',style);
        title.x = 55;
        title.y = 130;
        
        var style = {
            font : 'bold italic 15px Arial',
            fill : '#FF1E00',
            stroke : '#003660',
            strokeThickness : 3,
            dropShadow : true,
            dropShadowColor : '#000000',
            dropShadowAngle : Math.PI / 6,
            dropShadowDistance : 6,
            wordWrap : true,
            wordWrapWidth : 440
        };
        var subtitle = new PIXI.Text('Click anywhere to start',style);
        subtitle.x = 85;
        subtitle.y = 250;
        
        stage.addChild(this.board);
        stage.addChild(title);
        stage.addChild(subtitle);
    }
    draw_outline() {
        this.outline.clear();
        this.outline.lineStyle(2, 0xCCCCCC);
        this.outline.beginFill();
        this.outline.drawRect(0, 0, 250, 500);
        this.outline.endFill();
    }
}

class Tetris {
    constructor(stage) {
        console.log("constructor for tetris");
        this.board = new PIXI.Sprite();
        this.outline = new PIXI.Graphics();
        this.board.x = 50;
        this.board.y = 50;


        var largestyle = {
            font : 'bold italic 45px Arial',
            fill : '#FF1E00',
            stroke : '#4a1850',
            strokeThickness : 5,
            dropShadow : false,
            dropShadowColor : '#ffffff',
            dropShadowAngle : Math.PI / 6,
            dropShadowDistance : 6,
            wordWrap : false,
            wordWrapWidth : 440

        };
            var smallStyle = {
            font : 'bold italic 19px Arial',
            fill : '#FF1E00',
            stroke : '#003660',
            strokeThickness : 3,
            dropShadow : true,
            dropShadowColor : '#000000',
            dropShadowAngle : Math.PI / 6,
            dropShadowDistance : 6,
            wordWrap : true,
            wordWrapWidth : 440
        };

        // This is from an example from the PixiJS page
        var style = {
            font : 'bold italic 20px Arial',
            fill : '#F7EDCA',
            stroke : '#4a1850',
            strokeThickness : 5,
            dropShadow : false,
            dropShadowColor : '#ffffff',
            dropShadowAngle : Math.PI / 6,
            dropShadowDistance : 6,
            wordWrap : false,
            wordWrapWidth : 440

        };


        this.scoreText = new PIXI.Text('Score: 0', style);
        this.scoreText.x = 350;
        this.scoreText.y = 250;

        this.levelText = new PIXI.Text('Level: 1', style);
        this.levelText.x = 350;
        this.levelText.y = 270;

        this.gameOverText = new PIXI.Text(' ', largestyle);
        this.gameOverText.x = 48;
        this.gameOverText.y = 130;

        this.gameOverSubtitle = new PIXI.Text(' ', smallStyle);
        this.gameOverSubtitle.x = 60;
        this.gameOverSubtitle.y = 250;

        
        
        this.draw_outline();
        this.board.addChild(this.outline);
        
        this.build_matrix(this.board);
        stage.addChild(this.board);
        stage.addChild(this.scoreText);
        stage.addChild(this.levelText);
        stage.addChild(this.gameOverText);
        stage.addChild(this.gameOverSubtitle);

        if(!game_lost)
            this.current_piece = new Piece();


        var descend = function(event)
        {
            if (game_started && !game_lost) {
                this.current_piece.down();
                if (this.current_piece.conflict(this.board_matrix)) {
                    click.play();
                    this.current_piece.up();
                    this.current_piece.fill(this.board_matrix);

                    if(!game_lost)
                        this.current_piece = new Piece();
                if(this.current_piece.losingConflict(this.board_matrix))
                {
                        this.game_over();
                }
                    this.draw_piece();

                
                }
                this.clear_board();
                this.draw_piece();
            }

        }.bind(this);

        (function repeat()
        {
            if(initialTime > 100)
            {
                initialTime--;    
            }
            
            descend();
            timer_descend = setTimeout(repeat, initialTime);
        })();
        
        this.draw_piece();
        document.addEventListener('keydown', this.handle_key_presses.bind(this))
    }
    handle_key_presses(key) {
        if (game_started && !game_lost) {
            if (key.code == "ArrowDown") {
                key.preventDefault();
                this.current_piece.down();
                if (this.current_piece.conflict(this.board_matrix)) {
                    click.play();
                    this.current_piece.up();
                    this.current_piece.fill(this.board_matrix);

                    if(!game_lost)
                        this.current_piece = new Piece();

                if(this.current_piece.losingConflict(this.board_matrix))
                {
                    this.game_over();
                }
                    this.draw_piece()
                }
            }
            if (key.code == "ArrowUp"){
                key.preventDefault();
                this.current_piece.rotate(this.board_matrix);
                if(this.current_piece.conflict(this.board_matrix))
                    this.current_piece.unrotate();
            }

            if (key.code == "ArrowLeft") {
                key.preventDefault();
                this.current_piece.left();
                if (this.current_piece.conflict(this.board_matrix)) {
                    this.current_piece.right()
                }
            }
            if (key.code == "ArrowRight") {
                key.preventDefault();
                this.current_piece.right();
                if (this.current_piece.conflict(this.board_matrix)) {
                    this.current_piece.left()
                }
            }
            this.clear_board();
            this.draw_piece();
        }
    }
    draw_piece() {
        this.current_piece.draw(this.board_matrix)
    }
    build_matrix(container) {
        this.board_matrix = [];
        for (var i = 0; i < 10; i++) {
            this.board_matrix[i] = [];
            for (var j = 0; j < 20; j++) {
                this.board_matrix[i][j] = new Cell(container, i, j);
                this.board_matrix[i][j].visible = false
            }
        }
    }
    clear_board() {
        this.remove_filled_lines();

        for (var i = 0; i < 10; i++) {
            for (var j = 0; j < 20; j++) {
                this.board_matrix[i][j].draw();
                if (this.board_matrix[i][j].filled) {
                    this.board_matrix[i][j].visible = true
                } else {
                    this.board_matrix[i][j].visible = false
                }
            }
        }
    }

    reset_board()
    {
        for (var i = 0; i < 10; i++) {
            for (var j = 0; j < 20; j++) {
                this.board_matrix[i][j].filled = false;
                this.board_matrix[i][j].visible = false;
                this.board_matrix[i][j].draw();
            }
        }
    }


restart_game()
{
    if(game_lost)
    {
        this.gameOverSubtitle.setText(' ');
        this.gameOverText.setText(' ');
        this.reset_board();
        score = 0;
        level = 1;
        initialTime = 550;
        this.scoreText.setText('Score: 0');
        this.levelText.setText('Level: 1');

        game_lost = false;

        this.current_piece = new Piece();

    }
}

game_over() {
        update_highScore();
        game_lost = true;

        this.gameOverText.setText('Game Over');
        this.gameOverSubtitle.setText('Click anywhere to restart');
}

    remove_filled_lines()
        {
        if(initialTime > 460)
            {
                level = 1;
                
            }
            else if(initialTime > 420)
            {
                level = 2;
            }
            else if(initialTime > 380)
            {
                level = 3;
            }
            else if(initialTime > 340)
            {
                level = 4;
            }
            else if(initialTime > 300)
            {
                level = 5;
            }
            else if(initialTime > 250)
            {
                level = 6;
            }
            else if(initialTime > 200)
            {
                level = 7;
            }
            else if(initialTime > 150)
            {
                level = 8;
            }
            else if(initialTime > 100)
            {
                level = 9;
            }
            else
            {
                level = 10;
            }
    
            this.levelText.setText('Level: ' + level);

        var multiplier = 0;

        var lineFilled = true;
            for (var j = 0; j < 20; j++) {
                lineFilled = true;

                for (var i = 0; i < 10; i++) {
                
                    this.board_matrix[i][j].draw();

                    if (!this.board_matrix[i][j].filled){
                        lineFilled = false;
                        break;
                    }
                        
                } 
                if(lineFilled === true)
                {
                    laser.play();
                    score += (10 * ++multiplier);
                    this.scoreText.setText('Score: ' + score);

                    for(var k = j; k > 0; k--)
                    {
                        for(var h = 0; h < 10; h++)
                        {
                            this.board_matrix[h][k].filled = this.board_matrix[h][k-1].filled;
                            this.board_matrix[h][k].visible = this.board_matrix[h][k-1].visible;
                            this.board_matrix[h][k].color = this.board_matrix[h][k-1].color;
                        }
                    }

                    for(var h = 0; h < 10; h++)
                    {
                        this.board_matrix[h][0].filled = false;
                        this.board_matrix[h][0].visible = false;
                    }
                }
            }
        }

    draw_outline() {
        this.outline.clear();
        this.outline.lineStyle(2, 0xCCCCCC);
        this.outline.beginFill();
        this.outline.drawRect(0, 0, 250, 500);
        this.outline.endFill()
    }
}
var stage;
var renderer;


function after_load() {
    stage = new PIXI.Container();
    stage.interactive = true;
    renderer = PIXI.autoDetectRenderer(500, 600, null);
    document.getElementById('GameCanvas').appendChild(renderer.view);
    requestAnimationFrame(animate);
    new SplashPage(stage);
}


function start_game() {
    if (!game_started) {
        game_started = true;
        themesong.play();
        TetrisBoard = new Tetris(stage);
    }
     else
     {
         TetrisBoard.restart_game();
     }
}



function animate() {
    requestAnimationFrame(animate);
    renderer.render(stage)
}


function update_highScore(  )
{

    var data = {};
    data.name = $("#playerName").val();
    data.score = this.score;
    data.level = this.level;

    $.ajax(
    {
        type:'POST',
        url: "update_highScore.php",
        data: data,
        dataType: "html",             // The type of data that is getting returned.

        success: function(response)
        {
        // note: this function should be removed and use only the done function below
        console.log("success function");
        },
        
        /**
         * What to do before the ajax request is sent. Perhaps gather
         * page information, prep form, etc.
         */
        
    })
    .done( function ( data )
         {
             /**
              * What to do when the data is successfully retreived*/
             
                 var jContent = $( "#highScores" ); // put data here
                 jContent.html( data );
                 
         } )
    // if this is associated with a submit button, return false to
    // disable a page submit
    return false;
}

function get_high_scores(  )
{

    $.ajax(
    {
        type:'POST',
        url: "get_high_scores.php",
        //data: $('#form_id').serialize(),
        dataType: "html",             // The type of data that is getting returned.

        success: function(response)
        {
        // note: this function should be removed and use only the done function below
        console.log("success function");
        },
        
        /**
         * What to do before the ajax request is sent. Perhaps gather
         * page information, prep form, etc.
         */
        
    })
    .done( function ( data )
         {
             /**
              * What to do when the data is successfully retreived*/
             
                 var jContent = $( "#highScores" ); // put data here
                 jContent.html( data );
                 
         } )

    // if this is associated with a submit button, return false to
    // disable a page submit
    return false;
}

after_load();
var game_started = false;
var game_lost = false;
