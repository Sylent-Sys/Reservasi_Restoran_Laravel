<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Main Dashboard</title>
  <link rel="stylesheet" href="style.php">
  <style type="text/css">
    @import url('https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600&display=swap');

    :root{
      --yellow:#fed330;
      --red:#e74c3c;
      --white:#fff;
      --black:#222;
      --light-color:#777;
      --border:.2rem solid var(--black);
    }

    *{
      font-family: 'Rubik', sans-serif;
      margin:0; padding:0;
      box-sizing: border-box;
      outline: none; border: none;
      text-decoration: none;
    }

    *::selection{
      background-color: var(--yellow);
      color:var(--black);
    }

    ::-webkit-scrollbar{
      height: .5rem;
      width: 1rem;
    }

    ::-webkit-scrollbar-track{
      background-color: transparent;
    }

    ::-webkit-scrollbar-thumb{
      background-color: var(--yellow);
    }

    html{
      font-size: 62.5%;
      overflow-x: hidden;
      scroll-behavior: smooth;
      stop-opacity: 7rem;
    }

    section{
      margin:0 auto;
      max-width: 1200px;
      padding:2rem;
    }

    .title{
      text-align: center;
      margin-bottom: 2.5rem;
      font-size: 4rem;
      color:var(--black);
      text-transform: uppercase;
      text-decoration: underline;
      text-underline-offset: 1rem;
    }

    .heading{
      display: flex;
      align-items: center;
      justify-content: center;
      gap:1rem;
      flex-flow: column;
      background-color: var(--black);
      min-height: 20rem;
    }
      
    .heading h3{
      font-size: 5rem;
      color:var(--white);
      text-transform: capitalize;
    }

    .heading p{
      font-size: 2.3rem;
      color:var(--light-color);
    }

    .heading p a{
      color:var(--yellow);
    }

    .heading p a:hover{
      text-decoration: underline;
      color:var(--white);
    }

    .btn,
    .delete-btn{
      margin-top: 1rem;
      display: inline-block;
      font-size: 2rem;
      padding:1rem 3rem;
      cursor: pointer;
      text-transform: capitalize;
      transition: .2s linear;
    }

    .btn{
      background-color: var(--yellow);
      color:var(--black);
    }

    .delete-btn{
      background-color: var(--red);
      color:var(--white);
    }

    .btn:hover,
    .delete-btn:hover{
      letter-spacing: .2rem;
    }

    .disabled{
      opacity: .5;
      user-select: none;
      pointer-events: none;
    }

    .message{
      position: sticky;
      top:0;
      max-width: 1200px;
      margin:0 auto;
      padding:2rem;
      display: flex;
      align-items: center;
      gap:1rem;
      justify-content: space-between;
      background-color: var(--yellow);
    }

    .message span{
      font-size: 2rem;
      color:var(--black);
    }

    .message i{
      font-size: 2.5rem;
      color:var(--red);
      cursor: pointer;
    }

    .message i:hover{
      color:var(--black);
    }

    .empty{
      border:var(--border);
      padding:1.5rem;
      text-align: center;
      width: 100%;
      font-size: 2rem;
      text-transform: capitalize;
      color:var(--red);
    }

    .flex-btn{
      display: flex;
      gap:1rem;
    }

    .header{
      position: sticky;
      top:0; left:0; right:0;
      z-index: 1000;
      background-color: var(--white);
      border-bottom: var(--border);
    }

    .header .flex{
      display: flex;
      align-items: center;
      justify-content: space-between;
      position: relative;
    }

    .header .flex .logo{
      font-size: 2.5rem;
      color:var(--black);
    }

    .header .flex .navbar a{
      font-size: 2rem;
      color:var(--black);
      margin:0 1rem;
    }

    .header .flex .navbar a:hover{
      color:var(--yellow);
      text-decoration: underline;
    }

    .header .flex .icons > *{
      margin-left: 1.5rem;
      font-size: 2.5rem;
      color:var(--black);
      cursor: pointer;
    }

    .header .flex .icons > *:hover{
      color: var(--yellow);
    }

    .header .flex .icons span{
      font-size: 2rem;
    }

    #menu-btn{
      display: none;
    }

    .header .flex .profile{
      background-color: var(--white);
      border:var(--border);
      padding:1.5rem;
      text-align: center;
      position: absolute;
      top:125%; right:2rem;
      width: 30rem;
      display: none;
      animation: fadeIn .2s linear;
    }

    .header .flex .profile.active{
      display: inline-block;
    }

    @keyframes fadeIn {
      0%{
          transform: translateY(1rem);
      }
    }

    .header .flex .profile .name{
      font-size: 2rem;
      color:var(--black);
      margin-bottom: .5rem;
    }

    .header .flex .profile .account{
      margin-top: 1.5rem;
      font-size: 2rem;
      color:var(--light-color);
    }

    .header .flex .profile .account a{
      color:var(--black);
    }

    .header .flex .profile .account a:hover{
      color:var(--yellow);
      text-decoration: underline;
    }

    .hero .slide{
      display: flex;
      align-items: center;
      flex-wrap: wrap-reverse;
      gap:2rem;
      margin-bottom: 4rem;
    }

    .hero .slide .image{
      flex:1 1 40rem;
    }

    .hero .slide .image img{
      width: 100%;
    }

    .hero .slide .content{
      flex:1 1 40rem;
      text-align: center;
    }

    .hero .slide .content span{
      font-size: 2.5rem;
      color:var(--light-color);
    }

    .hero .slide .content h3{
      margin:1rem 0;
      font-size: 6rem;
      color:var(--black);
      text-transform: capitalize;
    }

    .swiper-pagination-bullet-active{
      background-color: var(--yellow);
    }

    .category .box-container{
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(27rem, 1fr));
      gap:1.5rem;
      align-items: flex-start;
    }

    .category .box-container .box{
      border:var(--border);
      padding:2rem;
      text-align: center;
    }

    .category .box-container .box img{
      width: 100%;
      height: 10rem;
      object-fit: contain;
    }

    .category .box-container .box h3{
      font-size: 2rem;
      margin-top: 1.5rem;
      color:var(--black);
      text-transform: capitalize;
    }

    .category .box-container .box:hover{
      background-color: var(--black);
    }

    .category .box-container .box:hover img{
      filter: invert(1);
    }

    .category .box-container .box:hover h3{
      color:var(--white);
    }

    .products .box-container{
      display: grid;
      grid-template-columns: repeat(auto-fit, 33rem);
      justify-content: center;
      align-items: flex-start;
      gap:1.5rem;
    }

    .products .box-container .box{
      border:var(--border);
      padding:1.5rem;
      position: relative;
      overflow: hidden;
    }

    .products .box-container .box img{
      height: 25rem;
      width: 100%;
      object-fit: contain;
      margin-bottom: 1rem;
    }

    .products .box-container .box .fa-eye,
    .products .box-container .box .fa-shopping-cart{
      position: absolute;
      top:1rem;
      height: 4.5rem;
      width: 4.5rem;
      line-height: 4.3rem;
      border:var(--border);
      background-color: var(--white);
      cursor: pointer;
      font-size: 2rem;
      color:var(--black);
      transition: .2s linear;
      text-align: center;
    }

    .products .box-container .box .fa-eye:hover,
    .products .box-container .box .fa-shopping-cart:hover{
      background-color: var(--black);
      color:var(--white);
    }

    .products .box-container .box .fa-eye{
      left: -10rem;
    }

    .products .box-container .box .fa-shopping-cart{
      right: -10rem;
    }

    .products .box-container .box:hover .fa-eye{
      left: 1rem;
    }

    .products .box-container .box:hover .fa-shopping-cart{
      right: 1rem;
    }

    .products .box-container .box .cat{
      font-size: 1.8rem;
      color:var(--light-color);
    }

    .products .box-container .box .cat:hover{
      color:var(--black);
      text-decoration: underline;
    }

    .products .box-container .box .name{
      font-size: 2rem;
      color:var(--black);
      margin:1rem 0;
    }

    .products .box-container .box .flex{
      display: flex;
      align-items: center;
      gap:1rem;
      margin-top: 1.5rem;
    }

    .products .box-container .box .flex .price{
      margin-right: auto;
      font-size: 2.5rem;
      color:var(--black);
    }

    .products .box-container .box .flex .price span{
      color:var(--light-color);
      font-size: 1.8rem;
    }

    .products .box-container .box .flex .qty{
      padding:1rem;
      border:var(--border);
      font-size: 1.8rem;
      color:var(--black);
    }

    .products .box-container .box .flex .fa-edit{
      width: 5rem;
      background-color: var(--yellow);
      color:var(--black);
      cursor: pointer;
      font-size: 1.8rem;
      height: 4.5rem;
      border:var(--border);
    }

    .products .box-container .box .flex .fa-edit:hover{
      background-color: var(--black);
      color:var(--white);
    }

    .products .box-container .box .fa-times{
      position: absolute;
      top:1rem; right:1rem;
      background-color: var(--red);
      color:var(--white);
      border:var(--border);
      line-height:4rem;
      height: 4.3rem;
      width: 4.5rem;
      cursor: pointer;
      font-size: 2rem;
    }

    .products .box-container .box .fa-times:hover{
      background-color: var(--black);
      color:var(--white);
    }

    .products .box-container .box .sub-total{
      margin-top: 1rem;
      font-size: 1.8rem;
      color:var(--light-color);
    }

    .products .box-container .box .sub-total span{
      color:var(--red);
    }

    .products .more-btn{
      margin-top: 1rem;
      text-align: center;
    }

    .products .cart-total{
      display: flex;
      align-items: center;
      gap:1.5rem;
      flex-wrap: wrap;
      justify-content: space-between;
      margin-top: 3rem;
      border:var(--border);
      padding:1rem;
    }

    .products .cart-total p{
      font-size: 2.5rem;
      color:var(--light-color);
    }

    .products .cart-total p span{
      color:var(--red);
    }

    .products .cart-total .btn{
      margin-top: 0;
    }

    .about .row{
      display: flex;
      align-items: center;
      flex-wrap: wrap;
      gap:1.5rem;
    }

    .about .row .image{
      flex:1 1 40rem;
    }

    .about .row .image img{
      width: 100%;
    }

    .about .row .content{
      flex:1 1 40rem;
      text-align: center;
    }

    .about .row .content h3{
      font-size: 3rem;
      color:var(--black);
      text-transform: capitalize;
      margin-bottom: 1rem;
    }

    .about .row .content p{
      padding:1rem 0;
      line-height: 2;
      font-size: 1.6rem;
      color:var(--light-color);
    }

    .steps .box-container{
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
      gap:1.5rem;
      align-items: flex-start;
    }

    .steps .box-container .box{
      text-align: center;
      border:var(--border);
      padding:2rem;
    }

    .steps .box-container .box img{
      height: 15rem;
      width: 100%;
      object-fit: contain;
      margin-bottom: 1rem;
    }

    .steps .box-container .box h3{
      font-size: 2.3rem;
      margin:1rem 0;
      color:var(--black);
      text-transform: capitalize;
    }

    .steps .box-container .box p{
      line-height: 2;
      font-size: 1.6rem;
      color:var(--light-color);
    }

    .reviews .slide{
      margin-bottom: 4rem;
      border:var(--border);
      padding:2rem;
      text-align: center;
    }

    .reviews .slide img{
      height: 10rem;
      width: 10rem;
      border-radius: 50%;
    }

    .reviews .slide p{
      padding:1.5rem 0;
      line-height: 2;
      font-size: 1.6rem;
      color:var(--light-color);
    }

    .reviews .slide .stars{
      display: inline-block;
      padding:.5rem 1.5rem;
      border:var(--border);
    }

    .reviews .slide .stars i{
      font-size: 1.8rem;
      color:var(--yellow);
    }

    .reviews .slide h3{
      font-size: 2rem;
      margin-top: 1.5rem;
      text-transform: capitalize;
      color:var(--black);
    }

    .contact .row{
      display: flex;
      align-items: center;
      flex-wrap: wrap;
      gap:1.5rem;
    }

    .contact .row .image{
      flex:1 1 40rem;
    }

    .contact .row .image img{
      width: 100%;
    }

    .contact .row form{
      border:var(--border);
      flex:1 1 40rem;
      padding:2rem;
      text-align: center;
    }

    .contact .row form h3{
      font-size: 2.5rem;
      color:var(--black);
      margin-bottom: 1rem;
      text-transform: capitalize;
    }

    .contact .row form .box{
      margin:.7rem 0;
      font-size: 1.8rem;
      color:var(--black);
      border:var(--border);
      padding:1.4rem;
      width: 100%;
    }

    .contact .row form textarea{
      height: 15rem;
      resize: none;
    }

    .search-form form{
      display: flex;
      gap:1.3rem;
    }

    .search-form form .box{
      width: 100%;
      border:var(--border);
      padding:1.4rem;
      font-size: 1.8rem;
      color:var(--black);
    }

    .search-form form .fa-search{
      width: 6rem;
      background-color: var(--black);
      color:var(--white);
      cursor: pointer;
      font-size: 2.5rem;
    }

    .search-form form .fa-search:hover{
      background-color: var(--yellow);
      color:var(--black);
    }

    .checkout form{
      max-width: 50rem;
      margin:0 auto;
      border:var(--border);
      padding:2rem;
    }

    .checkout form h3{
      font-size: 2.5rem;
      text-transform: capitalize;
      padding: 2rem 0;
      color:var(--black);
    }

    .checkout form .cart-items{
      background-color: var(--black);
      padding:2rem;
      padding-top: 0;
    }

    .checkout form .cart-items h3{
      color:var(--white);
    }

    .checkout form .cart-items p{
      display: flex;
      align-items: center;
      gap:1.5rem;
      justify-content: space-between;
      margin:1rem 0;
      line-height: 1.5;
      font-size: 2rem;
    }

    .checkout form .cart-items p .name{
      color:var(--light-color);
    }

    .checkout form .cart-items p .price{
      color:var(--yellow);
    }

    .checkout form .cart-items .grand-total{
      background-color: var(--white);
      padding:.5rem 1.5rem;
    }

    .checkout form .cart-items .grand-total .price{
      color:var(--red);
    }

    .checkout form .user-info p{ 
      font-size: 2rem;
      line-height: 1.5;
      padding:1rem 0;
    }

    .checkout form .user-info p i{
      color:var(--light-color);
      margin-right: 1rem;
    }

    .checkout form .user-info p span{
      color:var(--black);
    }

    .checkout form .user-info .box{
      width: 100%;
      border:var(--border);
      padding:1.4rem;
      margin-top: 2rem;
      margin-bottom: 1rem;
      font-size: 1.8rem;
    }

    .orders .box-container{
      display: flex;
      flex-wrap: wrap;
      gap:1.5rem;
      align-items: flex-start;
    }

    .orders .box-container .box{
      padding:1rem 2rem;
      border:var(--border);
      flex:1 1 40rem;
    }

    .orders .box-container .box p{
      line-height: 1.5;
      margin:1rem 0;
      font-size: 2rem;
      color:var(--light-color);
    }

    .orders .box-container .box p span{
      color:var(--black);
    }

    .form-container form{
      border:var(--border);
      margin:0 auto;
      max-width: 50rem;
      padding:2rem;
      text-align: center;
    }

    .form-container form h3{
      font-size: 2.5rem;
      color:var(--black);
      text-transform: uppercase;
      margin-bottom: 1rem;
    }

    .form-container form .box{
      margin:.7rem 0;
      width: 100%;
      border:var(--border);
      padding:1.4rem;
      font-size: 1.8rem;
      color:var(--black);
    }

    .form-container form p{
      margin-top: 1.5rem;
      font-size: 2rem;
      color:var(--light-color);
    }

    .form-container form p a{
      color:var(--black);
    }

    .form-container form p a:hover{
      text-decoration: underline;
    }

    .user-details .user{
      max-width: 50rem;
      margin:0 auto;
      border:var(--border);
      padding:2rem;
    }

    .user-details .user img{
      width: 100%;
      height: 20rem;
      object-fit: contain;
      margin-bottom: 1rem;
    }

    .user-details .user p{
      padding:1rem 0;
      line-height: 1.5;
      font-size: 2rem;
    }

    .user-details .user p span{
      color:var(--black);
    }

    .user-details .user p i{
      margin-right: 1rem;
      color:var(--light-color);
    }

    .user-details .user .address{
      margin-top: 1rem;
    }

    .quick-view form{
      max-width: 40rem;
      padding:2rem;
      border:var(--border);
      position: relative;
      margin:0 auto;
    }

    .quick-view form img{
      height: 25rem;
      width: 100%;
      object-fit: contain;
      margin-bottom: 1rem;
    }

    .quick-view form .cat{
      font-size: 1.8rem;
      color:var(--light-color);
    }

    .quick-view form .cat:hover{
      color:var(--black);
      text-decoration: underline;
    }

    .quick-view form .name{
      font-size: 2rem;
      margin:.5rem 0;
    }

    .quick-view form .flex{
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap:1.5rem;
      margin:1rem 0;
    }

    .quick-view form .flex .price{
      font-size: 2.5rem;
      color:var(--black);
    }

    .quick-view form .flex .price span{
      font-size: 2rem;
      color:var(--light-color);
    }

    .quick-view form .flex .qty{
      border:var(--border);
      padding:1rem;
      font-size: 1.8rem;
      color:var(--black);
    }

    .quick-view form .cart-btn{
      width: 100%;
      padding:1rem 3rem;
      text-align: center;
      border:var(--border);
      font-size: 2rem;
      color:var(--black);
      cursor: pointer;
      text-transform: capitalize;
      background: none;
      margin-top: 1rem;
    }

    .quick-view form .cart-btn:hover{
      background-color: var(--black);
      color:var(--white);
    }













    .footer .grid{
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(27rem, 1fr));
      gap:1.5rem;
      align-items: flex-start;
    }

    .footer .grid .box{
      border:var(--border);
      padding:2rem;
      text-align: center;
    }

    .footer .grid .box img{
      height: 10rem;
      width: 100%;
      object-fit: contain;
      margin-bottom: .5rem;
    }

    .footer .grid .box h3{
      margin:1rem 0;
      font-size: 2rem;
      color:var(--black);
      text-transform: capitalize;
    }

    .footer .grid .box p,
    .footer .grid .box a{
      display: block;
      font-size: 1.7rem;
      color:var(--light-color);
      line-height: 1.8;
    }

    .footer .grid .box a:hover{
      text-decoration: underline;
    }

    .credit{
      padding:3rem 2rem;
      text-align: center;
      background-color: var(--black);
      color:var(--white);
      font-size: 2rem;
      text-transform: capitalize;
      /* padding-bottom: 10rem; */
    }

    .credit span{
      color:var(--yellow);
    }

    .loader{
      position: fixed;
      top:0; left:0; right:0; bottom: 0;
      z-index: 1000000;
      background-color: var(--white);
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .loader img{
      height: 25rem;
    }



    /* media queries  */

    @media (max-width:991px) {
      
      html{
          font-size: 55%;
      }

    }

    @media (max-width:768px){

      #menu-btn{
          display: inline-block;
      }

      .header .flex .navbar{
          position: absolute;
          top:99%; left: 0; right: 0;
          border-top: var(--border);
          border-bottom: var(--border);
          background-color: var(--white);
          transition: .2s linear;
          clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
      }

      .header .flex .navbar a{
          display: block;
          margin:2rem;
      }

      .header .flex .navbar.active{
          clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
      }

    }

    @media (max-width:450px) {
      
      html{
          font-size: 50%;
      }

      .title{
          font-size: 3rem;
      }

      .header .flex .logo{
          font-size: 2rem;
      }

      .hero .slide .content h3{
          font-size: 5rem;
      }

      .products .box-container{
          grid-template-columns: 1fr;
      }

      .heading h3{
          font-size: 3.5rem;
      }

      .products .cart-total{
          padding:1.5rem;
          justify-content: center;
      }

      .flex-btn{
          flex-flow: column;
          gap:0;
      }   

    }
  </style>
    
</head>
<?php include 'C:\xampp\htdocs\Reservasi_Restoran_Laravel\resources\views\dropzone\components\user_header.php'; ?>

