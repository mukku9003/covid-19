<style type="text/css">

html{
    scroll-behavior: smooth;
}

*{ margin: 0; padding:0; box-sizing: border-box;  font-family: 'Muli', sans-serif;}

    .row{
        margin-left : 0!important;
        margin-right: 0!important;
    }

.nav_style{
    background-color: #a29bfe!important;
}

.nav_style a{
    color: white;
}


.main_header{
    height: 450px;
    width: 100%;
}

.rightside h1{
    font-size: 3rem;
}

.corona_rot img{
    animation: gocorona 3s linear infinite;
}

@keyframes gocorona{
    0% { transform: rotate(0); }
    100% { transform: rotate(360deg); }
}

.leftside img {
   animation:  heartbeat 5s linear infinite;
}

@keyframes heartbeat{
    0% { transform: scale(.75); }
    20% { transform: scale(1); }
    40% { transform: scale(.75); }
    60% { transform: scale(1); }
    80% { transform: scale(.75); }
    100% { transform: scale(.75); }

}



.corona_update{
    margin: 0 0 30px 0;
}

.corona_update h3{
    color: #ff7675;
}

.corona_update h1{
    font-size: 2rem;
    text-align: center;
}


.sub_section{
    background-color: #fbfafd;
}


#scBtn{
    display:none;
    position: fixed;
    bottom: 30px;
    right: 40px;
    z-index: 99;
    outline: none;
    background-color: #00A8FF;
    color: white;
    cursor: pointer;
    padding: 10px;
    border-radius: 10px;

}

#scBtn:hover{
    background: #606060;
}

.footer_style{
    background-color: #a29bfe!important;
}

.footer_style{
 margin-bottom:0!important;
}



@media(max-width:780px){
    .main_header{height:700px; text-align: center; }
    
    .main_header h1{
        text-align: center;
        padding:0;
        width: 100%;
        font-size: 30px;
    }

    .count_style{
        display: inline !important;
    }

    .count_style{
        text-align: center;
    }

    .about_res{
        margin-left: 0!important;
    }
}

.loader {
	  position: fixed;
	  left: 0;
	  top: 0;
	  width: 100%;
	  height: 100%;
	  z-index: 99;
	  background: url() 50% 50% no-repeat rgb(249,249,249);
  }
 

  	.loader-container {
		height: 100%;
		margin: 0;
		background: #ccc;
		color: #666;
		font-family: open sans;
		padding: 0;
  	}


  .preloader {
	background: #fff;
	display: flex;
	justify-content: center;
	align-items: center;
	height: 100%;
	width: 100%;
	position: relative;
  }
  
  .description {
	position: absolute;
	bottom: 10px;
	left: 12px;
  }
  
  .loader-container {
	cursor: default;
	display: flex;
	flex-wrap: wrap;
	justify-content: center;
	align-items: center;
  }
  
  
  
  .preloader-dots {
	height: 100px;
	width: 200px;
  }
  
  .preloader-dots .dot {
	display: inline-block;
	
	background: #f16529;
	height: 28px;
	width: 28px;
	opacity: 0.3;
	border-radius: 50%;
	animation: moveit 1.8s infinite;

  }
  
  .dot:nth-child(2) {
	animation-delay: .15s;
	background: #c2430c;
  }
  
  .dot:nth-child(3) {
	animation-delay: .3s;
	background: black;
  }
  
  .dot:nth-child(4) {
	animation-delay: .45s;
	background: green;
  }
  
  .dot:nth-child(5) {
	animation-delay: .6s;
	background: blue;
  }
  
  @keyframes moveit {
	0% {
	  transform: translateY(0px);
	}
	35% {
	  transform: translateY(0px);
	  opacity: 0.3;
	}
	50% {
	  transform: translateY(-20px);
	  opacity: 0.8;
	}
	70% {
	  transform: translateY(3px);
	  opacity: 0.8;
	}
	85% {
	  transform: translateY(-3px);
	}
  }
  

</style>