<?php include "header.php";?>
<script src="jquery.js"></script>

	<canvas id="myCanvas"
    width="500" height="600">
    	Your browser doesn't support canvas
    </canvas>
    <script>
		var interval;
		var canvas = document.getElementById("myCanvas");
		var context = canvas.getContext("2d");
		var bola = {
			x : 45,
			y : canvas.height-45,
			rad : 45,
			vY : 10,
			isJump : false,
			isDown : false
		};
		
		var balok = function(){
			this.width;
			this.height;
			this.x;
			this.y;
			this.speed;
			this.type;
			//width : 100,
			//height : 75,
			//x : canvas.width - 100,
			//y : canvas.height - 75,
			//vX : 3,
			//type : Math.floor((Math.random() * 2) + 1)
		};
		var Type;
		function Balok(y,width,height){
			 this.width =  width;
			 this.height = height;
			 this.x = canvas.width;
			 this.y = y;
			 this.spd = 5;
			 this.color = "red";
		}
		var enemy = [];
		function spawn(){
			Type=Math.floor((Math.random() * 2) + 1);
		
			if(Type==1){
			var bal = new Balok(500,150,Math.floor((Math.random() * 50) + 200));}
			else if(Type==2){
			var bal = new Balok(0,150,550);}
			enemy.push(bal);
			
		}
		var x;
		var y;
		var minh;
		var maxh;
		var Angka;
	
		var coin = function (){
			};
		
		var gravitasi = 0.2;
		var score = 0;
		var currmenu = "init";
		var vEnemy;
		var interval;
	
		

	
	function make(){
		var see= new balok();
		}
	function pause(){
			}
	function calculateScore()
	{ 
		var myVar=setInterval(function(){
			score += 1;
		},1000);
		var Myver=setInterval(function(){spawn();},2000); 
		currmenu = "game";
	
	}
		

	function animationManager()
	{
		//1.hapus canvas
		context.clearRect(0,0,canvas.width,canvas.height);
		//2.kalkulasi
		update();
		//3.gambar canvas
		if(currmenu == "init")
		{ if(currmenu!="gameover"){
			calculateScore();}
		}
		else if(currmenu == "game")
		{
			drawGame();
		}
		else if(currmenu=="gameover")
		{ context.clearRect(0,0,canvas.width,canvas.height);
			
		//kata,x,y
		context.fillText("Selamat Anda Mendapatkan",50,50);
		context.fillText("Score :" +Angka,100,100);
		clearInterval(myVar);
		clearInterval(myver);
		}
		else {clearInterval(interval)}
		//4.ulangi dari no 1
		requestAnimationFrame(animationManager);
	}
	var it = 1;
	function update()
	{
		if(bola.isDown == true && !bola.isJump){
			bola.rad=10;
			bola.y =  canvas.height - bola.rad; 
			it++;
			if(it>=170){
				bola.isDown = false;
				bola.rad = 45;
				bola.y =  canvas.height - bola.rad; 
				it= 1;
			}
		}
		
		if(bola.isJump == true) 
		{
			bola.y -= bola.vY;
			bola.vY -= gravitasi;
		}
		if(bola.y + 45 >=canvas.height - 1)
		{
			bola.isJump = false;
			bola.vY = 10;
		}
		for(var i=0;i<enemy.length;i++){
			enemy[i].x -= enemy[i].spd;

		}
		for(var i=0;i<enemy.length;i++){
		if(collides(bola,enemy[i])==true){
		currmenu="gameover";
		Angka=score;
		
		}
		}
		Balok.x -= Balok.vX;
		
		
		
	}
		
	function drawGame()
	{
		context.fillStyle = "#00FF00";
		//x,y,width,height
		context.fillRect(0,0,canvas.width,canvas.height);
		context.fillStyle = "#FF0000";
		context.beginPath();
		//x,y,rad,start,stop
		context.arc(bola.x,bola.y,bola.rad,0,Math.PI * 2);
		context.fill();
		
		
		context.font = "30px Arial";
		var widthText = context.measureText("Score :"+score).width;
		//kata,x,y
		context.fillText("Score :"+score,canvas.width - widthText,30);
		for(var i=0;i<enemy.length;i++){
			context.fillStyle=enemy[i].color;
			context.fillRect(enemy[i].x, enemy[i].y,enemy[i].width,enemy[i].height);
		}
	}
	
	$(window).on("keydown",function(e){
	
	switch(e.which)
	{
		case 32 : bola.isJump = true; break;
		case 40 : bola.isDown =true; break;	
	}
});
	
	$(window).on("load",function()
	{
		animationManager();		
	});
	function collides(a, b) {
  return a.x < b.x + b.width &&
         a.x + a.rad > b.x &&
         a.y < b.y + b.height &&
         a.y + a.rad > b.y;
}
	</script>
            
   <?php include "footer.php";?>
