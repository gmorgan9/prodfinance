<?php 
	include('functions.php');
    
?>

<!DOCTYPE html>
<html>
<head>
	<title>Portfolio</title>
    <!-- <link rel="icon" type="image/x-icon" href="logo.png"> -->
    <style>
        :root {
			--primary-color: #002E5D;
			--secondary-color: #002f5dc7;
		}
        * { 
	        margin: 0px; 
	        padding: 0px; 
            box-sizing: border-box;
        }
        body {
	        font-size: 120%;
	        background: #F8F8FF;
        } 
        .main-content p {
            margin-left: 35px;
        }
        .header {
	        width: 40%;
	        margin: 50px auto 0px;
	        color: white;
	        background: var(--primary-color);
	        text-align: center;
	        border: 1px solid var(--primary-color);
	        border-bottom: none;
	        border-radius: 10px 10px 0px 0px;
	        padding: 20px;
        }
        /* Navigation */
        .nav-header{
            width: 40%;
	        margin: 10px auto 0px;
            color: white;
	        background: var(--secondary-color);
	        text-align: center;
	        border: 1px solid var(--secondary-color);
	        border-bottom: none;
	        border-radius: 10px 10px 10px 10px;
	        padding: 15px 5px 20px 5px;
        }
        .nav-list {
            margin-top:10px;
            text-align:center;
        }
        .nav-list-item {
            list-style-type:none;
            display:inline;
            margin-right:8px;
            text-align:center;
        }
        .nav-list-link {
            cursor:pointer;
            color:white;
            text-decoration:none;
        }
        /* Column KB Cards */
        .row {
            margin-left: 12%;
        }
        /* Add padding BETWEEN each column (if you want) */
        .row,
        .row > .column {
          padding: 8px;
        }

        /* Create four equal columns that floats next to each other */
        .column {
            float: left;
            width: 30%;
        }

        /* Clear floats after rows */
        .row:after {
          content: "";
          display: table;
          clear: both;
        }

        /* Content */
        .box {
          /* border: 1px solid #002e5d; */
          background-color: #fff;
          text-align: center;
          height: 200px;
          /* border-radius: 10px 10px 10px 10px; */
        }
        .top-bar {
            height: 30px;
            background-size: cover;
            background-position: 50%;
            background-color: #002e5d;
            /* border-radius: 10px 10px 0px 0px; */
        }
        .content {
            padding: 10px;
        }

        /* Responsive layout - makes a two column-layout instead of four columns */
        @media screen and (max-width: 900px) {
          .column {
            width: 70%;
          }
        }

        /* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {
          .column {
            width: 100%;
          }
        }


        /* HEADER-TOP
        .headercontent-top {
          position: sticky;
          color: white;
          background: var(--primary-color);
          padding: 0;
          display: grid;
          grid-gap: 0;
          grid-template-columns: 72px auto;
        }
        .header-logo {
          display: -ms-flexbox;
          display: flex;
          -ms-flex-align: center;
          align-items: center;
          -ms-flex-pack: center;
          justify-content: center;
          min-height: 56px;
        }
        .header-titles {
          position: relative;
          padding: 9px 36px 9px 13px;
        }      */



        @import "bourbon";

@import 'https://fonts.googleapis.com/css?family=Montserrat:400,700|Raleway:300,400';


/* colors */
$blue: #428BFF;
$red: #FF4A53;
$dark: #333;

$accent: $blue;
$accent-inactive: desaturate($accent, 85%);
$secondary: $accent-inactive;


/* tab setting */
$tab-count: 4;
$indicator-width: 50px;
$indicator-height: 4px;

/* breakpoints */
$breakpoints: (
  medium: #{$tab-count*250px},
  small: #{$tab-count*150px}
);


/* selectors relative to radio inputs */
$label-selector: "~ ul > li";
$slider-selector: "~ .slider";
$content-selector: "~ .content > section";

@mixin tabs(
  $label-selector: $label-selector,
  $slider-selector: $slider-selector,
  $content-selector: $content-selector) {
    
  @for $i from 1 through $tab-count {
    &:nth-of-type(#{$i}):checked {
      #{$label-selector}:nth-child(#{$i}) {
        @content;
      }

      #{$slider-selector} {
        transform: translateX(#{100% * ($i - 1)});
      }

      #{$content-selector}:nth-child(#{$i}) {
        display: block;
      }
    }
  }
}

html {
  width: 100%;
  height: 100%;
}

body {
  background: #efefef;
  color: $dark;
  font-family: "Raleway";
  height: 100%;
  
  h1 {
    text-align: center;
    color: $accent;
    font-weight: 300;
    padding: 40px 0 20px 0;
    margin: 0;
  }
}

.tabs {
  left: 50%;
  transform: translateX(-50%);
  position: relative;
  background: white;
  padding: 50px;
  padding-bottom: 80px;
  width: 70%;
  height: 250px;
  box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
  border-radius: 5px;
  min-width: #{$tab-count * 60px};
  input[name="tab-control"] {
    display: none;
  }
  
  .content section h2,
  ul li label {
    font-family: "Montserrat";
    font-weight: bold;
    font-size: 18px;
    color: $accent;
  }
  
  ul {
    list-style-type: none;
    padding-left: 0;
    display: flex;
    flex-direction: row;
    margin-bottom: 10px;
    justify-content: space-between;
    align-items: flex-end;
    flex-wrap: wrap;
    
    li {
      box-sizing: border-box;
      flex: 1;
      width: #{100%/$tab-count};
      padding: 0 10px;
      text-align: center;
      
      label {
        transition: all 0.3s ease-in-out;
        color: $secondary;
        padding: 5px auto;
        overflow: hidden;
        text-overflow: ellipsis;
        display: block;
        cursor: pointer;
        transition: all 0.2s ease-in-out;
        white-space: nowrap;
        -webkit-touch-callout: none;
        @include user-select(none);
        
        br {
          display: none;
        }
        
        svg {
          fill: $secondary;
          height: 1.2em;
          vertical-align: bottom;
          margin-right: 0.2em;
          transition: all 0.2s ease-in-out;
        }
        
        &:hover,
        &:focus,
        &:active {
          outline: 0;
          color: lighten($secondary, 15%);
          svg {
            fill: lighten($secondary, 15%);
          }
        }
      }
    }
  }
  
  .slider {
    position: relative;
    width: #{100%/$tab-count};
    transition: all 0.33s cubic-bezier(0.38, 0.8, 0.32, 1.07);
    .indicator {
      position: relative;
      width: $indicator-width;
      max-width: 100%;
      margin: 0 auto;
      height: $indicator-height;
      background: $accent;
      border-radius: 1px;     
    }

  }
  
  .content {
    margin-top: 30px;
    
    section {
      display: none;
      animation: {
        name: content;
        direction: normal;
        duration: 0.3s;
        timing-function: ease-in-out;
        iteration-count: 1;
      }
      line-height: 1.4;
      
      h2 {
        color: $accent;
        display: none;
        &::after {
          content: "";
          position: relative;
          display: block;
          width: 30px;
          height: 3px;
          background: $accent;
          margin-top: 5px;
          left: 1px;
        }
      }
    }
  }
  
  input[name="tab-control"] {
    @include tabs {
      > label {
        cursor: default;
        color: $accent;
        
        svg {
          fill: $accent;
        }
        
        @media (max-width: map-get($breakpoints, small)) {
          background: rgba(0, 0, 0, 0.08);
        }
      }
    }
  }

  @keyframes content {
    from {
      opacity: 0;
      transform: translateY(5%);
    }
    to {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  
  @media (max-width: map-get($breakpoints, medium)) {
    ul li label {
      white-space: initial;
      
      br {
        display: initial;
      }
      
      svg {
        height: 1.5em;
      }
    }
  }
  
  @media (max-width: map-get($breakpoints, small)) {
    ul li label {
      padding: 5px;
      border-radius: 5px;
      
      span {
        display: none;
      }
    }
    
    .slider {
      display: none;
    }
    
    .content {
      margin-top: 20px; 
      section h2 {
        display: block;
      }
    }
  }
}


    </style>
</head>
<body>

<!-- <div class="headercontent-top">
  <div class="header-logo">
LOGO
  </div>
  <div class="header-titles">
    <div class="subheader">
      <h4>
        Welcome
      </h4>
    </div>
    <div class="mainheader">
      <h2>
        Documentation
      </h2>
    </div>
  </div>

</div> -->

	<div class="header">
		<h2>Portfolio Page</h2>
	</div>

    <div class="nav-header">
        <?php if(isLoggedIn())
		{
		?>
      	    <nav class="nav-list">
                <li class="nav-list-item"><a class="nav-list-link" href="index.php">Home</a></li>
                | &nbsp;
                <li class="nav-list-item"><a class="nav-list-link" href="portfolio.php">Portfolio</a></li>
                | &nbsp;
                <li class="nav-list-item"><a class="nav-list-link" href="about.php">About</a></li>
                | &nbsp;
                <li class="nav-list-item"><a class="nav-list-link" href="profileinfo.php">Profile</a></li>
                | &nbsp;
                <li class="nav-list-item"><a class="nav-list-link" href="index.php?logout='1'">Logout</a></li>
        </nav>
		<?php }else{ ?>
			<nav class="nav-list">
                <li class="nav-list-item"><a class="nav-list-link" href="index.php">Home</a></li>
                | &nbsp;
                <li class="nav-list-item"><a class="nav-list-link" href="portfolio.php">Portfolio</a></li>
                | &nbsp;
                <li class="nav-list-item"><a class="nav-list-link" href="about.php">About</a></li>
                | &nbsp;
                <li class="nav-list-item"><a class="nav-list-link" href="login.php">Login</a></li>
                | &nbsp;
                <li class="nav-list-item"><a class="nav-list-link" href="register.php">Register</a></li>
                </nav>
		<?php } ?>
        </div>
        <br><br>

    <div class="main-content">
      <div class="content-header">
        <h2 style="text-align:center;">Documentation</h2>
        <h4 style="text-align:center;">Portfolio here</h4>
      </div>



      <!-- <div class="tabs">
        <div class="tabmodule" data-tab-id="test">
          <div class="tablabel">test</div>
        </div>
        <div class="tabcontent" data-tab-content>
        <div class="column">
        <div class="box">
          <div class="top-bar"></div>
            <div class="content">
              <h3>My Work[Box 1]</h3>
              <p>Lorem ipsum..</p>
            </div>
        </div>
      </div>
        </div>
      </div> -->




      <div class="tabs">
  
  <input type="radio" id="tab1" name="tab-control" checked>
  <input type="radio" id="tab2" name="tab-control">
  <input type="radio" id="tab3" name="tab-control">  
  <input type="radio" id="tab4" name="tab-control">
  <ul>
    <li title="Features"><label for="tab1" role="button"><svg viewBox="0 0 24 24"><path d="M14,2A8,8 0 0,0 6,10A8,8 0 0,0 14,18A8,8 0 0,0 22,10H20C20,13.32 17.32,16 14,16A6,6 0 0,1 8,10A6,6 0 0,1 14,4C14.43,4 14.86,4.05 15.27,4.14L16.88,2.54C15.96,2.18 15,2 14,2M20.59,3.58L14,10.17L11.62,7.79L10.21,9.21L14,13L22,5M4.93,5.82C3.08,7.34 2,9.61 2,12A8,8 0 0,0 10,20C10.64,20 11.27,19.92 11.88,19.77C10.12,19.38 8.5,18.5 7.17,17.29C5.22,16.25 4,14.21 4,12C4,11.7 4.03,11.41 4.07,11.11C4.03,10.74 4,10.37 4,10C4,8.56 4.32,7.13 4.93,5.82Z"/>
</svg><br><span>Features</span></label></li>
    <li title="Delivery Contents"><label for="tab2" role="button"><svg viewBox="0 0 24 24"><path d="M2,10.96C1.5,10.68 1.35,10.07 1.63,9.59L3.13,7C3.24,6.8 3.41,6.66 3.6,6.58L11.43,2.18C11.59,2.06 11.79,2 12,2C12.21,2 12.41,2.06 12.57,2.18L20.47,6.62C20.66,6.72 20.82,6.88 20.91,7.08L22.36,9.6C22.64,10.08 22.47,10.69 22,10.96L21,11.54V16.5C21,16.88 20.79,17.21 20.47,17.38L12.57,21.82C12.41,21.94 12.21,22 12,22C11.79,22 11.59,21.94 11.43,21.82L3.53,17.38C3.21,17.21 3,16.88 3,16.5V10.96C2.7,11.13 2.32,11.14 2,10.96M12,4.15V4.15L12,10.85V10.85L17.96,7.5L12,4.15M5,15.91L11,19.29V12.58L5,9.21V15.91M19,15.91V12.69L14,15.59C13.67,15.77 13.3,15.76 13,15.6V19.29L19,15.91M13.85,13.36L20.13,9.73L19.55,8.72L13.27,12.35L13.85,13.36Z" />
</svg><br><span>Delivery Contents</span></label></li>
    <li title="Shipping"><label for="tab3" role="button"><svg viewBox="0 0 24 24">
    <path d="M3,4A2,2 0 0,0 1,6V17H3A3,3 0 0,0 6,20A3,3 0 0,0 9,17H15A3,3 0 0,0 18,20A3,3 0 0,0 21,17H23V12L20,8H17V4M10,6L14,10L10,14V11H4V9H10M17,9.5H19.5L21.47,12H17M6,15.5A1.5,1.5 0 0,1 7.5,17A1.5,1.5 0 0,1 6,18.5A1.5,1.5 0 0,1 4.5,17A1.5,1.5 0 0,1 6,15.5M18,15.5A1.5,1.5 0 0,1 19.5,17A1.5,1.5 0 0,1 18,18.5A1.5,1.5 0 0,1 16.5,17A1.5,1.5 0 0,1 18,15.5Z" />
</svg><br><span>Shipping</span></label></li>    <li title="Returns"><label for="tab4" role="button"><svg viewBox="0 0 24 24">
    <path d="M11,9H13V7H11M12,20C7.59,20 4,16.41 4,12C4,7.59 7.59,4 12,4C16.41,4 20,7.59 20,12C20,16.41 16.41,20 12,20M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M11,17H13V11H11V17Z" />
</svg><br><span>Returns</span></label></li>
  </ul>
  
  <div class="slider"><div class="indicator"></div></div>
  <div class="content">
    <section>
      <h2>Features</h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea dolorem sequi, quo tempore in eum obcaecati atque quibusdam officiis est dolorum minima deleniti ratione molestias numquam. Voluptas voluptates quibusdam cum?</section>
        <section>
          <h2>Delivery Contents</h2>
          <div class="row">
      <div class="column">
        <div class="box">
          <div class="top-bar"></div>
            <div class="content">
              <h3>My Work[Box 1]</h3>
              <p>Lorem ipsum..</p>
            </div>
        </div>
      </div>
      <div class="column">
        <div class="box">
          <div class="top-bar"></div>
            <div class="content">
              <h3>My Work[Box 2]</h3>
              <p>Lorem ipsum..</p>
            </div>
        </div>
      </div>
      <div class="column">
        <div class="box">
          <div class="top-bar"></div>
            <div class="content">
              <h3>My Work[Box 3]</h3>
              <p>Lorem ipsum..</p>
            </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="column">
        <div class="box">
          <div class="top-bar"></div>
            <div class="content">
              <h3>My Work[Box 4]</h3>
              <p>Lorem ipsum..</p>
            </div>
        </div>
      </div>
    </div>
  </section>
        <section>
          <h2>Shipping</h2>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam nemo ducimus eius, magnam error quisquam sunt voluptate labore, excepturi numquam! Alias libero optio sed harum debitis! Veniam, quia in eum.</section>
    <section>
          <h2>Returns</h2>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa dicta vero rerum? Eaque repudiandae architecto libero reprehenderit aliquam magnam ratione quidem? Nobis doloribus molestiae enim deserunt necessitatibus eaque quidem incidunt.</section>
  </div>
</div>




    
    
<!-- <div class="row">
      <div class="column">
        <div class="box">
          <div class="top-bar"></div>
            <div class="content">
              <h3>My Work[Box 1]</h3>
              <p>Lorem ipsum..</p>
            </div>
        </div>
      </div>
      <div class="column">
        <div class="box">
          <div class="top-bar"></div>
            <div class="content">
              <h3>My Work[Box 2]</h3>
              <p>Lorem ipsum..</p>
            </div>
        </div>
      </div>
      <div class="column">
        <div class="box">
          <div class="top-bar"></div>
            <div class="content">
              <h3>My Work[Box 3]</h3>
              <p>Lorem ipsum..</p>
            </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="column">
        <div class="box">
          <div class="top-bar"></div>
            <div class="content">
              <h3>My Work[Box 4]</h3>
              <p>Lorem ipsum..</p>
            </div>
        </div>
      </div>
    </div> -->






    


    </div>
</body>
</html>