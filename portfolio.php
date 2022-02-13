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


      <div class="TabModule-wrapper Tabs-wrapper container py-0">
		

		

		<div class="TabModule-tabs-container Tabs-tabs-container ">
			
				<div class="TabModule-tabs Tabs-tabs ">
					
						<div class="TabModule-tab Tabs-tab  active" data-tab-id="automation">
							
							<div class="TabModule-tab-label Tabs-tab-label">Automation</div>
						</div>
					
						<div class="TabModule-tab Tabs-tab  " data-tab-id="compute">
							
							<div class="TabModule-tab-label Tabs-tab-label">Compute</div>
						</div>
					
						<div class="TabModule-tab Tabs-tab  " data-tab-id="cloud-management">
							
							<div class="TabModule-tab-label Tabs-tab-label">Cloud Management</div>
						</div>
					
						<div class="TabModule-tab Tabs-tab  " data-tab-id="data-protection">
							
							<div class="TabModule-tab-label Tabs-tab-label">Data Protection</div>
						</div>
					
						<div class="TabModule-tab Tabs-tab  " data-tab-id="general">
							
							<div class="TabModule-tab-label Tabs-tab-label">General</div>
						</div>
					
						<div class="TabModule-tab Tabs-tab  " data-tab-id="networking">
							
							<div class="TabModule-tab-label Tabs-tab-label">Networking</div>
						</div>
					
						<div class="TabModule-tab Tabs-tab  " data-tab-id="storage">
							
							<div class="TabModule-tab-label Tabs-tab-label">Storage</div>
						</div>
					
						<div class="TabModule-tab Tabs-tab  " data-tab-id="virtualization">
							
							<div class="TabModule-tab-label Tabs-tab-label">Virtualization</div>
						</div>
					
						<div class="TabModule-tab Tabs-tab  " data-tab-id="windows-platform">
							
							<div class="TabModule-tab-label Tabs-tab-label">Windows Platform</div>
						</div>
					

					<div class="TabModule-tabs-dropdown-container Tabs-tabs-dropdown-container">
						<div class="TabModule-tabs-dropdown Tabs-tabs-dropdown">
							<select class="TabModule-dropdown-select input input-stroke input-select">
								
									<option value="automation" selected>Automation</option>
								
									<option value="compute" >Compute</option>
								
									<option value="cloud-management" >Cloud Management</option>
								
									<option value="data-protection" >Data Protection</option>
								
									<option value="general" >General</option>
								
									<option value="networking" >Networking</option>
								
									<option value="storage" >Storage</option>
								
									<option value="virtualization" >Virtualization</option>
								
									<option value="windows-platform" >Windows Platform</option>
								
							</select>
						</div>
					</div>
				</div>
			

			<div class="TabModule-content Tabs-content">
				
					<div class="TabModule-panel Tabs-panel active" data-tab-content="automation">
						<span class="Anchor" id="automation" ></span>

	<div class="TabItem">
		<div class="TabItem-content">


<div class="ListCardTextOnly   " 


>
  <span class="Anchor" id="list-automation-documents" ></span>

  

  
  
    <h2 class="ListCardTextOnly-title list-title"   >
        <span class="Link">Automation Documents</span>
    </h2>


  
  

  
    
    
      
      
        
        <div class="ListCardTextOnly-items list-items container list list-3 list-items-4">
          
            <div class="ListCardTextOnly-items-item list-items-item">
            
              <div class="PromoCardTextOnly PromoAbstract
 text-left promo-has-dropshadow    image-left    content-vertical-center  content-horizontal-left  text-center show-external-icon"
  >

  
    <div class="PromoCardTextOnly-topBar" ></div>
  

  <div class="PromoCardTextOnly-content">

    
      
    

    
    
    <h3 class="PromoCardTextOnly-title promo-title ">
        <a class="Link" href="https://byu.sharepoint.com/:b:/s/OITOnPremisesPlatform/EdFJFAR8B4BMmJOXjzMV-jYBB9tHjjvAfUkGXZ4aCZXV6w?e=vhFPqJ" data-cms-ai="0"    >OIT-OPP  Github repository</a>
    </h3>


    
      
      
    

    
      
    

    
  </div>
</div>

            
            </div>
          
            <div class="ListCardTextOnly-items-item list-items-item">
            
              <div class="PromoCardTextOnly PromoAbstract
 text-left promo-has-dropshadow    image-left    content-vertical-center  content-horizontal-left  text-center show-external-icon"
  >

  
    <div class="PromoCardTextOnly-topBar" ></div>
  

  <div class="PromoCardTextOnly-content">

    
      
    

    
    
    <h3 class="PromoCardTextOnly-title promo-title ">
        <a class="Link" href="https://byu.sharepoint.com/:b:/s/OITOnPremisesPlatform/EeffKXJ_KOVCvwJmpKNVwo4BYP0J4gZCguFITHBYcmrVAw?e=xX5btT" data-cms-ai="0"    >OIT-OPP Team Windows Automation Server</a>
    </h3>


    
      
      
    

    
      
    

    
  </div>
</div>

            
            </div>
          
            <div class="ListCardTextOnly-items-item list-items-item">
            
              <div class="PromoCardTextOnly PromoAbstract
 text-left promo-has-dropshadow    image-left    content-vertical-center  content-horizontal-left  text-center show-external-icon"
  >

  
    <div class="PromoCardTextOnly-topBar" ></div>
  

  <div class="PromoCardTextOnly-content">

    
      
    

    
    
    <h3 class="PromoCardTextOnly-title promo-title ">
        <a class="Link" href="https://byu.sharepoint.com/sites/OITOnPremisesPlatform/Shared%20Documents/Team%20documentation/Automation/OITVC%20SQL%20Server%20deploy%20script%20automation.pdf" data-cms-ai="0"    >Automated Deployment of SQL Server instance in OITVC</a>
    </h3>


    
      
      
    

    
      
    

    
  </div>
</div>

            
            </div>
          
            <div class="ListCardTextOnly-items-item list-items-item">
            
              <div class="PromoCardTextOnly PromoAbstract
 text-left promo-has-dropshadow    image-left    content-vertical-center  content-horizontal-left  text-center show-external-icon"
  >

  
    <div class="PromoCardTextOnly-topBar" ></div>
  

  <div class="PromoCardTextOnly-content">

    
      
    

    
    
    <h3 class="PromoCardTextOnly-title promo-title ">
        <a class="Link" href="https://byu.sharepoint.com/sites/OITOnPremisesPlatform/Shared%20Documents/Team%20documentation/Automation/OITVC%20SQL%20Server%20deploy%20tools%20configuration.pdf" data-cms-ai="0"    >Configuration of Automated SQL Server Deployment Tools</a>
    </h3>


    
      
      
    

    
      
    

    
  </div>
</div>

            
            </div>
          
        </div>
        
      

    

  

  
  


  
  
    




</div></div>
	</div>

					</div>
				
					<div class="TabModule-panel Tabs-panel " data-tab-content="compute">
						<span class="Anchor" id="compute" ></span>

	<div class="TabItem">
		<div class="TabItem-content">


<div class="ListCardTextOnly   " 


>
  <span class="Anchor" id="list-null" ></span>

  

  
  

  
  

  
    
    
      
      
        
        <div class="ListCardTextOnly-items list-items container list list-3 list-items-5">
          
            <div class="ListCardTextOnly-items-item list-items-item">
            
              <div class="PromoCardTextOnly PromoAbstract
 text-left promo-has-dropshadow    image-left    content-vertical-center  content-horizontal-left  text-center show-external-icon"
  >

  
    <div class="PromoCardTextOnly-topBar" ></div>
  

  <div class="PromoCardTextOnly-content">

    
      
    

    
    
    <h3 class="PromoCardTextOnly-title promo-title ">
        <a class="Link" href="https://byu.sharepoint.com/:b:/s/OITOnPremisesPlatform/EQIFsDkXwCdEiyu8t47VuqwBYcUvxt0vPcN2bvhc3GRzdQ?e=TpmcOS" data-cms-ai="0"    >Update SSL Certs for Hosts</a>
    </h3>


    
      
      
    

    
      
    

    
  </div>
</div>

            
            </div>
          
            <div class="ListCardTextOnly-items-item list-items-item">
            
              <div class="PromoCardTextOnly PromoAbstract
 text-left promo-has-dropshadow    image-left    content-vertical-center  content-horizontal-left  text-center show-external-icon"
  >

  
    <div class="PromoCardTextOnly-topBar" ></div>
  

  <div class="PromoCardTextOnly-content">

    
      
    

    
    
    <h3 class="PromoCardTextOnly-title promo-title ">
        <a class="Link" href="https://byu.sharepoint.com/:b:/s/OITOnPremisesPlatform/ETLnITnzFbBHjB0-wXFCphYBkwYm8q0irpmUxxS3ehbN5g?e=lItlqK" data-cms-ai="0"    >OPP VMware Availability Monitoring</a>
    </h3>


    
      
      
    

    
      
    

    
  </div>
</div>

            
            </div>
          
            <div class="ListCardTextOnly-items-item list-items-item">
            
              <div class="PromoCardTextOnly PromoAbstract
 text-left promo-has-dropshadow    image-left    content-vertical-center  content-horizontal-left  text-center show-external-icon"
  >

  
    <div class="PromoCardTextOnly-topBar" ></div>
  

  <div class="PromoCardTextOnly-content">

    
      
    

    
    
    <h3 class="PromoCardTextOnly-title promo-title ">
        <a class="Link" href="https://byu.app.box.com/file/860423346088?s=1l7g19lkk5wvl5hqdu9bklpk1sbx176t" data-cms-ai="0"    >OPP VMware Monitoring VM&#x27;s Inventory</a>
    </h3>


    
      
      
    

    
      
    

    
  </div>
</div>

            
            </div>
          
            <div class="ListCardTextOnly-items-item list-items-item">
            
              <div class="PromoCardTextOnly PromoAbstract
 text-left promo-has-dropshadow    image-left    content-vertical-center  content-horizontal-left  text-center show-external-icon"
  >

  
    <div class="PromoCardTextOnly-topBar" ></div>
  

  <div class="PromoCardTextOnly-content">

    
      
    

    
    
    <h3 class="PromoCardTextOnly-title promo-title ">
        <a class="Link" href="https://byu.sharepoint.com/sites/OITOnPremisesPlatform/_layouts/15/Doc.aspx?OR=teams&amp;action=edit&amp;sourcedoc={D2ACCEC1-617A-4E06-9FB0-3E116C2C8763}" data-cms-ai="0"    >OPP VMware Cluster CPU Balance Model</a>
    </h3>


    
      
      
    

    
      
    

    
  </div>
</div>

            
            </div>
          
            <div class="ListCardTextOnly-items-item list-items-item">
            
              <div class="PromoCardTextOnly PromoAbstract
 text-left promo-has-dropshadow    image-left    content-vertical-center  content-horizontal-left  text-center show-external-icon"
  >

  
    <div class="PromoCardTextOnly-topBar" ></div>
  

  <div class="PromoCardTextOnly-content">

    
      
    

    
    
    <h3 class="PromoCardTextOnly-title promo-title ">
        <a class="Link" href="https://byu.sharepoint.com/:b:/s/OITOnPremisesPlatform/EdSel4PcP_lAhsyKmoXEtogBPaBEp9cFP4GPTcMRxYYshw?e=wPemy6" data-cms-ai="0"    >KB: Windows VM- Blue Screen Driver issues</a>
    </h3>


    
      
      
    

    
      
    

    
  </div>
</div>

            
            </div>
          
        </div>
        
      

    

  

  
  


  
  
    




</div></div>
	</div>

					</div>
				
					<div class="TabModule-panel Tabs-panel " data-tab-content="cloud-management">
						<span class="Anchor" id="cloud-management" ></span>

	<div class="TabItem">
		<div class="TabItem-content">


<div class="ListCardTextOnly   " 


>
  <span class="Anchor" id="list-null" ></span>

  

  
  

  
  

  
    
    
      
      
        
        <div class="ListCardTextOnly-items list-items container list list-3 list-items-1">
          
            <div class="ListCardTextOnly-items-item list-items-item">
            
              <div class="PromoCardTextOnly PromoAbstract
 text-left promo-has-dropshadow    image-left    content-vertical-center  content-horizontal-left  article text-center show-external-icon"
  >

  
    <div class="PromoCardTextOnly-topBar" ></div>
  

  <div class="PromoCardTextOnly-content">

    
      
    

    
    
    <h3 class="PromoCardTextOnly-title promo-title ">
        <a class="Link" href="https://oit.byu.edu/opp/placeholder" data-cms-ai="0"    >Placeholder</a>
    </h3>


    
      
      
    <div class="PromoCardTextOnly-description  promo-description"> 
  
 
   Placeholder Card  
 

            
        
    </div>

    

    
      
    

    
  </div>
</div>

            
            </div>
          
        </div>
        
      

    

  

  
  


  
  
    




</div></div>
	</div>

					</div>
				
					<div class="TabModule-panel Tabs-panel " data-tab-content="data-protection">
						<span class="Anchor" id="data-protection" ></span>

	<div class="TabItem">
		<div class="TabItem-content">


<div class="ListCardTextOnly   " 


>
  <span class="Anchor" id="list-null" ></span>

  

  
  

  
  

  
    
    
      
      
        
        <div class="ListCardTextOnly-items list-items container list list-3 list-items-1">
          
            <div class="ListCardTextOnly-items-item list-items-item">
            
              <div class="PromoCardTextOnly PromoAbstract
 text-left promo-has-dropshadow    image-left    content-vertical-center  content-horizontal-left  article text-center show-external-icon"
  >

  
    <div class="PromoCardTextOnly-topBar" ></div>
  

  <div class="PromoCardTextOnly-content">

    
      
    

    
    
    <h3 class="PromoCardTextOnly-title promo-title ">
        <a class="Link" href="https://oit.byu.edu/opp/placeholder" data-cms-ai="0"    >Placeholder</a>
    </h3>


    
      
      
    <div class="PromoCardTextOnly-description  promo-description"> 
  
 
   Placeholder Card  
 

            
        
    </div>

    

    
      
    

    
  </div>
</div>

            
            </div>
          
        </div>
        
      

    

  

  
  


  
  
    




</div></div>
	</div>

					</div>
				
					<div class="TabModule-panel Tabs-panel " data-tab-content="general">
						<span class="Anchor" id="general" ></span>

	<div class="TabItem">
		<div class="TabItem-content">


<div class="ListCardTextOnly   " 


>
  <span class="Anchor" id="list-null" ></span>

  

  
  

  
  

  
    
    
      
      
        
        <div class="ListCardTextOnly-items list-items container list list-3 list-items-7">
          
            <div class="ListCardTextOnly-items-item list-items-item">
            
              <div class="PromoCardTextOnly PromoAbstract
 text-left promo-has-dropshadow    image-left    content-vertical-center  content-horizontal-left  text-center show-external-icon"
  >

  
    <div class="PromoCardTextOnly-topBar" ></div>
  

  <div class="PromoCardTextOnly-content">

    
      
    

    
    
    <h3 class="PromoCardTextOnly-title promo-title ">
        <a class="Link" href="https://byu.box.com/s/iujy0sobp9aqacs5doiugc5ho9dtmf31" data-cms-ai="0"    >OIT Platform Hardware Information</a>
    </h3>


    
      
      
    

    
      
    

    
  </div>
</div>

            
            </div>
          
            <div class="ListCardTextOnly-items-item list-items-item">
            
              <div class="PromoCardTextOnly PromoAbstract
 text-left promo-has-dropshadow    image-left    content-vertical-center  content-horizontal-left  text-center show-external-icon"
  >

  
    <div class="PromoCardTextOnly-topBar" ></div>
  

  <div class="PromoCardTextOnly-content">

    
      
    

    
    
    <h3 class="PromoCardTextOnly-title promo-title ">
        <a class="Link" href="https://byu.sharepoint.com/:x:/s/OITOnPremisesPlatform/EahuUUPcDcpMsZxDklHvL7YBEB1xwy80DsHLRmHkr2FYQQ?e=vq12A7" data-cms-ai="0"    >YCloud CSR Contact Info</a>
    </h3>


    
      
      
    

    
      
    

    
  </div>
</div>

            
            </div>
          
            <div class="ListCardTextOnly-items-item list-items-item">
            
              <div class="PromoCardTextOnly PromoAbstract
 text-left promo-has-dropshadow    image-left    content-vertical-center  content-horizontal-left  text-center show-external-icon"
  >

  
    <div class="PromoCardTextOnly-topBar" ></div>
  

  <div class="PromoCardTextOnly-content">

    
      
    

    
    
    <h3 class="PromoCardTextOnly-title promo-title ">
        <a class="Link" href="https://byu.sharepoint.com/:b:/s/OITOnPremisesPlatform/EdPsLMwS7HxIjZV5U5Y1OrUBnby87edKB4A_lDwgqoO9Lg?e=LfvSXg" data-cms-ai="0"    >How to Add Brightspot Editors</a>
    </h3>


    
      
      
    

    
      
    

    
  </div>
</div>

            
            </div>
          
            <div class="ListCardTextOnly-items-item list-items-item">
            
              <div class="PromoCardTextOnly PromoAbstract
 text-left promo-has-dropshadow    image-left    content-vertical-center  content-horizontal-left  text-center show-external-icon"
  >

  
    <div class="PromoCardTextOnly-topBar" ></div>
  

  <div class="PromoCardTextOnly-content">

    
      
    

    
    
    <h3 class="PromoCardTextOnly-title promo-title ">
        <a class="Link" href="https://byu.sharepoint.com/:b:/s/OITOnPremisesPlatform/EaK-u2TRC-9Li8K7xeVToegBomTyBr2kwuEurK_1CC4Cuw?e=GvaOLl" data-cms-ai="0"    >Add a Document</a>
    </h3>


    
      
      
    <div class="PromoCardTextOnly-description  promo-description"> 
  
 
   How to add additional documentation to this website.  
 

            
        
    </div>

    

    
      
    

    
  </div>
</div>

            
            </div>
          
            <div class="ListCardTextOnly-items-item list-items-item">
            
              <div class="PromoCardTextOnly PromoAbstract
 text-left promo-has-dropshadow    image-left    content-vertical-center  content-horizontal-left  text-center show-external-icon"
  >

  
    <div class="PromoCardTextOnly-topBar" ></div>
  

  <div class="PromoCardTextOnly-content">

    
      
    

    
    
    <h3 class="PromoCardTextOnly-title promo-title ">
        <a class="Link" href="https://byu.sharepoint.com/:v:/s/OITOnPremisesPlatform/EYDBhwAvJXtCg0LYGYzy1g8BL1r3Y_h5CwWNDpwMzOGOTA?e=bOk1Be" data-cms-ai="0"    >Video Tutorial</a>
    </h3>


    
      
      
    

    
      
    

    
  </div>
</div>

            
            </div>
          
            <div class="ListCardTextOnly-items-item list-items-item">
            
              <div class="PromoCardTextOnly PromoAbstract
 text-left promo-has-dropshadow    image-left    content-vertical-center  content-horizontal-left  text-center show-external-icon"
  >

  
    <div class="PromoCardTextOnly-topBar" ></div>
  

  <div class="PromoCardTextOnly-content">

    
      
    

    
    
    <h3 class="PromoCardTextOnly-title promo-title ">
        <a class="Link" href="https://byu.sharepoint.com/:x:/s/OITOnPremisesPlatform/EUX5vbp5WBNJqB236tcYciIBau5eeyMxBFbj5Jpps2zuuQ?e=S7bCVn" data-cms-ai="0"    >Datacenter Locations - Simplified</a>
    </h3>


    
      
      
    

    
      
    

    
  </div>
</div>

            
            </div>
          
            <div class="ListCardTextOnly-items-item list-items-item">
            
              <div class="PromoCardTextOnly PromoAbstract
 text-left promo-has-dropshadow    image-left    content-vertical-center  content-horizontal-left  text-center show-external-icon"
  >

  
    <div class="PromoCardTextOnly-topBar" ></div>
  

  <div class="PromoCardTextOnly-content">

    
      
    

    
    
    <h3 class="PromoCardTextOnly-title promo-title ">
        <a class="Link" href="https://byu.sharepoint.com/:b:/s/OITOnPremisesPlatform/EcuCLO18ijtGk-onk2EKa70BY4ciclmq_pUKxT8VrFgt0A?e=XSn4ep" data-cms-ai="0"    >How to Create and Add Private/Public Keys for sswfile.byu.edu</a>
    </h3>


    
      
      
    

    
      
    

    
  </div>
</div>

            
            </div>
          
        </div>
        
      

    

  

  
  


  
  
    




</div></div>
	</div>

					</div>
				
					<div class="TabModule-panel Tabs-panel " data-tab-content="networking">
						<span class="Anchor" id="networking" ></span>

	<div class="TabItem">
		<div class="TabItem-content">


<div class="ListCardTextOnly   " 


>
  <span class="Anchor" id="list-null" ></span>

  

  
  

  
  

  
    
    
      
      
        
        <div class="ListCardTextOnly-items list-items container list list-3 list-items-5">
          
            <div class="ListCardTextOnly-items-item list-items-item">
            
              <div class="PromoCardTextOnly PromoAbstract
 text-left promo-has-dropshadow    image-left    content-vertical-center  content-horizontal-left  text-center show-external-icon"
  >

  
    <div class="PromoCardTextOnly-topBar" ></div>
  

  <div class="PromoCardTextOnly-content">

    
      
    

    
    
    <h3 class="PromoCardTextOnly-title promo-title ">
        <a class="Link" href="https://byu.sharepoint.com/:b:/s/OITOnPremisesPlatform/EXb0uL--rM5NoZoSpNPrrPoBAi7nSjJDfYRfWOIOXNNs_A?e=qfxE3b" data-cms-ai="0"    >Network Infrastructure: Lab</a>
    </h3>


    
      
      
    

    
      
    

    
  </div>
</div>

            
            </div>
          
            <div class="ListCardTextOnly-items-item list-items-item">
            
              <div class="PromoCardTextOnly PromoAbstract
 text-left promo-has-dropshadow    image-left    content-vertical-center  content-horizontal-left  text-center show-external-icon"
  >

  
    <div class="PromoCardTextOnly-topBar" ></div>
  

  <div class="PromoCardTextOnly-content">

    
      
    

    
    
    <h3 class="PromoCardTextOnly-title promo-title ">
        <a class="Link" href="https://byu.sharepoint.com/sites/OITOnPremisesPlatform/Shared%20Documents/Team%20documentation/Networking/OIT%20Compute%20Network%20Infrastructure%20-%20MX7000.pdf" data-cms-ai="0"    >Network Infrastructure Diagram: Production</a>
    </h3>


    
      
      
    

    
      
    

    
  </div>
</div>

            
            </div>
          
            <div class="ListCardTextOnly-items-item list-items-item">
            
              <div class="PromoCardTextOnly PromoAbstract
 text-left promo-has-dropshadow    image-left    content-vertical-center  content-horizontal-left  text-center show-external-icon"
  >

  
    <div class="PromoCardTextOnly-topBar" ></div>
  

  <div class="PromoCardTextOnly-content">

    
      
    

    
    
    <h3 class="PromoCardTextOnly-title promo-title ">
        <a class="Link" href="https://byu.sharepoint.com/sites/OITOnPremisesPlatform/Shared%20Documents/Team%20documentation/Networking/OIT%20Platform%20Dell%20mx9116n%20upgrade.pdf" data-cms-ai="0"    >MX9116n Switch Upgrade (CLI)</a>
    </h3>


    
      
      
    

    
      
    

    
  </div>
</div>

            
            </div>
          
            <div class="ListCardTextOnly-items-item list-items-item">
            
              <div class="PromoCardTextOnly PromoAbstract
 text-left promo-has-dropshadow    image-left    content-vertical-center  content-horizontal-left  text-center show-external-icon"
  >

  
    <div class="PromoCardTextOnly-topBar" ></div>
  

  <div class="PromoCardTextOnly-content">

    
      
    

    
    
    <h3 class="PromoCardTextOnly-title promo-title ">
        <a class="Link" href="https://byu.sharepoint.com/:b:/s/OITOnPremisesPlatform/EVqp9HPQt4RLqSyNGa_z4ssBJx1TUl8T-XewIjNcRa7pjg?e=NgRXdp" data-cms-ai="0"    >MXL Switch Upgrade (CLI)</a>
    </h3>


    
      
      
    

    
      
    

    
  </div>
</div>

            
            </div>
          
            <div class="ListCardTextOnly-items-item list-items-item">
            
              <div class="PromoCardTextOnly PromoAbstract
 text-left promo-has-dropshadow    image-left    content-vertical-center  content-horizontal-left  text-center show-external-icon"
  >

  
    <div class="PromoCardTextOnly-topBar" ></div>
  

  <div class="PromoCardTextOnly-content">

    
      
    

    
    
    <h3 class="PromoCardTextOnly-title promo-title ">
        <a class="Link" href="https://byu.sharepoint.com/:b:/s/OITOnPremisesPlatform/Ee9F61JR5kpNvM1bkzxT6GEBEFExcmqBJgVWMCCJ4qe9sA?e=be02up" data-cms-ai="0"    >MX9116n Switch Upgrade (OME)</a>
    </h3>


    
      
      
    

    
      
    

    
  </div>
</div>

            
            </div>
          
        </div>
        
      

    

  

  
  


  
  
    




</div></div>
	</div>

					</div>
				
					<div class="TabModule-panel Tabs-panel " data-tab-content="storage">
						<span class="Anchor" id="storage" ></span>

	<div class="TabItem">
		<div class="TabItem-content">


<div class="ListCardTextOnly   " 


>
  <span class="Anchor" id="list-null" ></span>

  

  
  

  
  

  
    
    
      
      
        
        <div class="ListCardTextOnly-items list-items container list list-3 list-items-1">
          
            <div class="ListCardTextOnly-items-item list-items-item">
            
              <div class="PromoCardTextOnly PromoAbstract
 text-left promo-has-dropshadow    image-left    content-vertical-center  content-horizontal-left  text-center show-external-icon"
  >

  
    <div class="PromoCardTextOnly-topBar" ></div>
  

  <div class="PromoCardTextOnly-content">

    
      
    

    
    
    <h3 class="PromoCardTextOnly-title promo-title ">
        <a class="Link" href="https://byu.sharepoint.com/:x:/s/OITOnPremisesPlatform/EXQFasnCtBZJtiBQTFaxcaMB8b8Nb_reOGRMrER4sGlGQQ?e=DCu7B2" data-cms-ai="0"    >OIT OPP FC san fabric port assignments</a>
    </h3>


    
      
      
    

    
      
    

    
  </div>
</div>

            
            </div>
          
        </div>
        
      

    

  

  
  


  
  
    




</div></div>
	</div>

					</div>
				
					<div class="TabModule-panel Tabs-panel " data-tab-content="virtualization">
						<span class="Anchor" id="virtualization" ></span>

	<div class="TabItem">
		<div class="TabItem-content">


<div class="ListCardTextOnly   " 


>
  <span class="Anchor" id="list-null" ></span>

  

  
  

  
  

  
    
    
      
      
        
        <div class="ListCardTextOnly-items list-items container list list-3 list-items-1">
          
            <div class="ListCardTextOnly-items-item list-items-item">
            
              <div class="PromoCardTextOnly PromoAbstract
 text-left promo-has-dropshadow    image-left    content-vertical-center  content-horizontal-left  article text-center show-external-icon"
  >

  
    <div class="PromoCardTextOnly-topBar" ></div>
  

  <div class="PromoCardTextOnly-content">

    
      
    

    
    
    <h3 class="PromoCardTextOnly-title promo-title ">
        <a class="Link" href="https://oit.byu.edu/opp/placeholder" data-cms-ai="0"    >Placeholder</a>
    </h3>


    
      
      
    <div class="PromoCardTextOnly-description  promo-description"> 
  
 
   Placeholder Card  
 

            
        
    </div>

    

    
      
    

    
  </div>
</div>

            
            </div>
          
        </div>
        
      

    

  

  
  


  
  
    




</div></div>
	</div>

					</div>
				
					<div class="TabModule-panel Tabs-panel " data-tab-content="windows-platform">
						<span class="Anchor" id="windows-platform" ></span>

	<div class="TabItem">
		<div class="TabItem-content">


<div class="ListCardTextOnly   " 


>
  <span class="Anchor" id="list-null" ></span>

  

  
  

  
  

  
    
    
      
      
        
        <div class="ListCardTextOnly-items list-items container list list-3 list-items-1">
          
            <div class="ListCardTextOnly-items-item list-items-item">
            
              <div class="PromoCardTextOnly PromoAbstract
 text-left promo-has-dropshadow    image-left    content-vertical-center  content-horizontal-left  article text-center show-external-icon"
  >

  
    <div class="PromoCardTextOnly-topBar" ></div>
  

  <div class="PromoCardTextOnly-content">

    
      
    

    
    
    <h3 class="PromoCardTextOnly-title promo-title ">
        <a class="Link" href="https://oit.byu.edu/opp/placeholder" data-cms-ai="0"    >Placeholder</a>
    </h3>


    
      
      
    <div class="PromoCardTextOnly-description  promo-description"> 
  
 
   Placeholder Card  
 

            
        
    </div>

    

    
      
    

    
  </div>
</div>

            
            </div>
          
        </div>
        
      

    

  

  
  


  
  
    




</div></div>
	</div>

					</div>
				
			</div>
		</div>
	</div>
</div>












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


    </div>
</body>
</html>