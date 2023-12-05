*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'poppins' sans-serif;
}

.header{
    min-height: 100vh;
    width: 100%;
    background-image: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(images/frame.jpg);
    background-size: cover;
    background-position: center;

}

nav{
    display: flex;
    width: 84%;
    margin: auto;
    padding: 20px 0;
    align-items: center;
    justify-content: space-between;
    max-height: 100px;
    overflow: hidden;
    transition: max-height 0.5s;

}
.search-bar{
    background: #fff;
    width: 70px;
    margin: 30px;
    padding: 50px;
    border-radius: 10px;
}

.logo{
    width: 94px;
    cursor: pointer;
}
.nav-links li{
    display: inline-block;
    list-style: none;
    margin: 10px 30px;
}

.nav-links li a{
    text-decoration: none;
    color: #000;

}

.nav-links li a:hover{
    color: #fabd02;
}
.signup-btn{
    background: #fabd02;
    color: #000;
    padding: 8px 20px;
    border-radius: 20px;
    text-decoration: none;
    font-size: 14px;
}

.login-btn{
    background: #fabd02;
    color: #000;
    font-size: 14px;
    padding: 8px 20px;
    border-radius: 20px;
    text-decoration: none;
    text-decoration: none;
}

.d-grid a:hover{
    color: blue; 
}

.container{
    padding: 0 7%;
}
.header{
    font-family: 'Libre Baskerville', serif;
}
.header h1{
    font-size: 4vw;
    font-weight: 500;
    color: #fabd02;
    text-align: center;
    padding-top: 3%;
}
.header p{
    font-size: 3vw;
    font-weight: 300;
    color: white;
    text-align: center;
    padding-top: 0%;
}
.container-fluid{
    margin-top: 25%;
}



.sub-title{
    margin-top: 30px;
    margin-bottom: 30px;
}
.col{
   justify-items: 50px; 
}
.sub-title a:hover{
    color: #fabd02;
}

.pic{
    font-size: 100%;
}

.card-img{
    position: absolute;
    width: 80%;
    color: #fff;
    font-size: 26px;
    
}

.footer{
    margin-top: 30px;
    margin: 80px 0 10px;
    text-align: center;
}
.footer a{
    text-decoration: none;
    color: #343a40;
    font-size: 22px;
    margin: 0 10px;
    font-weight: bold;
}
.footer hr{
    color: #343a40;
   
}
.footer p{
    color: #343a40;
}

.active{
    position: relative;
}
.active{
    

}

nav .bi-list{
    display: none;
}

/*------small sreen-------*/

@media only screen and (max-width: 700px){
    .logo{
        position: fixed;
        top: 4%;
        left: 7%;
    }
    nav{
        position: fixed;
        top: 0;
        z-index: 100;
        display: inline-block;
        width: 100%;
        padding: 100px 7% 0;
        background: #999;
        text-align: right;
    }
    nav .nav-links li{
        margin: 10px;
        display: block;
    }
    .d-grid{
        justify-content: right;
    }
    .signup-btn{
        margin: 15px 0 30px;
        display: inline-block;
        font-size: medium;
        text-align: center;
    }
    .login-btn{
        margin: 15px o 30px;
        display: inline-block;
        font-size: medium;
        text-align: center;
    }
    nav .bi-list{
        display: block;
        position: fixed;
        top: 4%;
        right: 7%;
        color: #000;
        font-size: 28px;
    }
    .active::after{

    }
    .hidemenu{
        max-height: 600px;
    }
    .container-fluid{
        align-items: center;
        margin-top: 40%;
    }

}
    


/*-----------listing page----------*/

nav{
    margin-bottom: 60px;
}
.row{
    margin-bottom: 30px;
}


/*----------contact---------*/
.mb-3{
    font-size: 18px;
    padding: 45px 60px;
    background-color: #fabd02;
    margin: 20px 18px;
}
.submit{
    margin-top: 40px;
}