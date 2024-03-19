<?php

?>
<!DOCTYPE html>
<html lang="en" class="">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Forms - Admin One Tailwind CSS Admin Dashboard</title>

  <!-- Tailwind is included -->
  <link rel="stylesheet" href="css/main.css?v=1628755089081">

  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png"/>
  <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png"/>
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png"/>
  <link rel="mask-icon" href="safari-pinned-tab.svg" color="#00b4b6"/>

  <meta name="description" content="Admin One - free Tailwind dashboard">

  <meta property="og:url" content="https://justboil.github.io/admin-one-tailwind/">
  <meta property="og:site_name" content="JustBoil.me">
  <meta property="og:title" content="Admin One HTML">
  <meta property="og:description" content="Admin One - free Tailwind dashboard">
  <meta property="og:image" content="https://justboil.me/images/one-tailwind/repository-preview-hi-res.png">
  <meta property="og:image:type" content="image/png">
  <meta property="og:image:width" content="1920">
  <meta property="og:image:height" content="960">

  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:title" content="Admin One HTML">
  <meta property="twitter:description" content="Admin One - free Tailwind dashboard">
  <meta property="twitter:image:src" content="https://justboil.me/images/one-tailwind/repository-preview-hi-res.png">
  <meta property="twitter:image:width" content="1920">
  <meta property="twitter:image:height" content="960">

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-130795909-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-130795909-1');
  </script>

</head>
<body>

<div id="app">
  <nav id="navbar-main" class="navbar is-fixed-top">
    <div class="navbar-brand">
      <a class="navbar-item mobile-aside-button">
        <span class="icon"><i class="mdi mdi-forwardburger mdi-24px"></i></span>
      </a> 
  </nav>

<aside class="aside is-placed-left is-expanded">
  <div class="aside-tools">
    <div>
      Admin <b class="font-black">Nike</b>
    </div>
  </div>
  <div class="menu is-menu-main">
    <p class="menu-label">General</p>
    <ul class="menu-list">
      <li class="active">
        <a href="index.php">
          <span class="icon"><i class="mdi mdi-desktop-mac"></i></span>
          <span class="menu-item-label">Dashboard</span>
        </a>
      </li>
    </ul>
    <p class="menu-label">Operations</p>
    <ul class="menu-list">
      <li class="--set-active-tables-html">
        <a href="tables.php">
          <span class="icon"><i class="mdi mdi-table"></i></span>
          <span class="menu-item-label">Inventory</span>
        </a>
      </li>
      <li class="--set-active-forms-html">
        <a href="forms.php">
          <span class="icon"><i class="mdi mdi-square-edit-outline"></i></span>
          <span class="menu-item-label">Add Product</span>
        </a>
      </li>
      
     
    </ul>
    
  </div>
</aside>

<section class="is-title-bar">
  <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
    <ul>
      <li>Admin</li>
      <li>Add Product</li>
    </ul>
   
  </div>
</section>

<section class="is-hero-bar">
  <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
    <h1 class="title">
    Add Product
    </h1>
    
  </div>
</section>

  <section class="section main-section">
    <div class="card mb-6">
      <header class="card-header">
        <p class="card-header-title">
          <span class="icon"><i class="mdi mdi-ballot"></i></span>
          Product
        </p>
      </header>
      <div class="card-content">
        <form method="post" action="./Add.php" enctype="multipart/form-data">
          <div class="field">
            <label class="label">Details</label>
            <div class="field-body">
              <div class="field">
                <div class="control icons-left">
                  <input class="input" type="text" placeholder=" Product Name" name="pname">
                  <span class="icon left"><i class="mdi mdi-account"></i></span>
                </div>
              </div>
              <div class="field">
                <div class="control icons-left icons-right">
                  <input class="input" type="text" placeholder="Description" name="pdesc">
                  <span class="icon left"><i class="mdi mdi-mail"></i></span>
                 
                </div>
              </div>
            </div>
          </div>
  
          <div class="field">
            <label class="label">Price</label>
            <div class="field-body">
              <div class="field">
                <div class="control icons-left">
                  <input class="input" type="number" placeholder="Old Price" name="oprice">
                  <span class="icon left"><i class="mdi mdi-account"></i></span>
                </div>
              </div>
              <div class="field">
                <div class="control icons-left icons-right">
                  <input class="input" type="number" placeholder="New Price" name="nprice">
                  <span class="icon left"><i class="mdi mdi-mail"></i></span>
                 
                </div>
              </div>
            </div>
          </div>
          <hr>
          <div class="field">
            <label class="label">Image</label>

            <div class="control">
              <input class="input" type="file" placeholder="e.g. Partnership opportunity" name="imgupload"> 
            
            </div>
           
          
          <hr>

          <div class="field grouped">
            <div class="control">
              <button type="submit" class="button green">
                Submit
              </button>
            </div>
            <div class="control">
              <button type="reset" class="button red">
                Reset
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>

    <!-- <div class="card">
      <header class="card-header">
        <p class="card-header-title">
          <span class="icon"><i class="mdi mdi-ballot-outline"></i></span>
          Custom elements
        </p>
      </header>
      <div class="card-content">
        <div class="field">
          <label class="label">Checkbox</label>
          <div class="field-body">
            <div class="field grouped multiline">
              <div class="control">
                <label class="checkbox"><input type="checkbox" value="lorem" checked>
                  <span class="check"></span>
                  <span class="control-label">Lorem</span>
                </label>
              </div>
              <div class="control">
                <label class="checkbox"><input type="checkbox" value="ipsum">
                  <span class="check"></span>
                  <span class="control-label">Ipsum</span>
                </label>
              </div>
              <div class="control">
                <label class="checkbox"><input type="checkbox" value="dolore">
                  <span class="check is-primary"></span>
                  <span class="control-label">Dolore</span>
                </label>
              </div>
            </div>
          </div>
        </div>
        <hr>
        <div class="field">
          <label class="label">Radio</label>
          <div class="field-body">
            <div class="field grouped multiline">
              <div class="control">
                <label class="radio">
                  <input type="radio" name="sample-radio" value="one" checked>
                  <span class="check"></span>
                  <span class="control-label">One</span>
                </label>
              </div>
              <div class="control">
                <label class="radio">
                  <input type="radio" name="sample-radio" value="two">
                  <span class="check"></span>
                  <span class="control-label">Two</span>
                </label>
              </div>
            </div>
          </div>
        </div>
        <hr>
        <div class="field">
          <label class="label">Switch</label>
          <div class="field-body">
            <div class="field">
              <label class="switch">
                <input type="checkbox" value="false">
                <span class="check"></span>
                <span class="control-label">Default</span>
              </label>
            </div>
          </div>
        </div>
        <hr>
        <div class="field">
          <label class="label">File</label>
          <div class="field-body">
            <div class="field file">
              <label class="upload control">
                <a class="button blue">
                  Upload
                </a>
                <input type="file">
              </label>
            </div>
          </div>
        </div>
      </div>
    </div> -->
  </section>



<div id="sample-modal" class="modal">
  <div class="modal-background --jb-modal-close"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">Sample modal</p>
    </header>
    <section class="modal-card-body">
      <p>Lorem ipsum dolor sit amet <b>adipiscing elit</b></p>
      <p>This is sample modal</p>
    </section>
    <footer class="modal-card-foot">
      <button class="button --jb-modal-close">Cancel</button>
      <button class="button red --jb-modal-close">Confirm</button>
    </footer>
  </div>
</div>

<div id="sample-modal-2" class="modal">
  <div class="modal-background --jb-modal-close"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">Sample modal</p>
    </header>
    <section class="modal-card-body">
      <p>Lorem ipsum dolor sit amet <b>adipiscing elit</b></p>
      <p>This is sample modal</p>
    </section>
    <footer class="modal-card-foot">
      <button class="button --jb-modal-close">Cancel</button>
      <button class="button blue --jb-modal-close">Confirm</button>
    </footer>
  </div>
</div>

</div>

<!-- Scripts below are for demo only -->
<script type="text/javascript" src="js/main.min.js?v=1628755089081"></script>


<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '658339141622648');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=658339141622648&ev=PageView&noscript=1"/></noscript>

<!-- Icons below are for demo only. Feel free to use any icon pack. Docs: https://bulma.io/documentation/elements/icon/ -->
<link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.9.95/css/materialdesignicons.min.css">

</body>
</html>
<?php
?>