<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.7.1.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/chart.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/myScripts.js"></script>
	
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div id="wrapper">

	<div id="header">
        <div class="full-width clearfix">
            <div id="logo">
                <a href="<?php echo $this->createUrl("naujiena/index",array());?>"><img src="./images/logo.png" alt="Logo" /></a>
            </div>
            <?php if($this->action->id != "login" ):?>
            <ul id="user-menu">
                <li><img src="./images/icon-message.png" alt="message icon" /> <a href="<?php echo $this->createUrl("pranesimas/index",array());?>">Pranešimai <?php echo Pranesimas::getUnreadString();?></a></li>
                <li><a href="<?php echo $this->createUrl("site/logout",array());?>" class="logout">Atsijungti (<?php echo Yii::app()->user->name;?>)</a></li>
            </ul>
            <?php endif; ?>
         </div>
    </div>
	<?php if($this->action->id != "login"):?>
		<div id="navigation-wrapper">
            <div class="full-width">
                <ul id="navigation">
                    <li>
                        <a class="news" href="<?php echo $this->createUrl("naujiena/index",array());?>">Naujienos</a>
                        <ul class="sub-navigation">
                            <li><a href="<?php echo $this->createUrl("naujiena/create",array());?>">Rašyti</a></li>
                            <li><a href="<?php echo $this->createUrl("naujiena/admin",array());?>">Tvarkyti</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo $this->createUrl("vartotojas/admin",array());?>"><img src="./images/icon-users.png" alt="" />Vartotojai</a>
                        <ul class="sub-navigation">
                            <li><a href="<?php echo $this->createUrl("vartotojas/create",array());?>">Registruoti</a></li>
                            <li><a href="<?php echo $this->createUrl("vartotojas/index",array());?>">Ataskaita</a></li>
                            <li><a href="<?php echo $this->createUrl("premija/create",array());?>">Paskirti premiją</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo $this->createUrl("preke/index",array());?>"><img src="./images/icon-products.png" alt="" />Prekės</a>
                        <ul class="sub-navigation">
                            <li><a href="<?php echo $this->createUrl("preke/create",array());?>">Kurti naują</a></li>
                            <li><a href="<?php echo $this->createUrl("preke/paskirti",array());?>">Paskirti sandėliui</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo $this->createUrl("uzsakymas/admin",array());?>"><img src="./images/icon-orders.png" alt="" />Užsakymai</a>
                        <ul class="sub-navigation">
                        	<li><a href="<?php echo $this->createUrl("uzsakymas/create",array());?>">Kurti</a></li>
                            <li><a href="<?php echo $this->createUrl("uzsakymas/index",array());?>">Ataskaita</a></li>
                            <li><a href="<?php echo $this->createUrl("uzsakymas/paskirti",array());?>">Paskirti vartotojui</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo $this->createUrl("planas/index",array());?>"><img src="./images/icon-plans.png" alt="" />Planai</a>
                        <ul class="sub-navigation">
                            <li><a href="<?php echo $this->createUrl("planas/create",array());?>">Kurti</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo $this->createUrl("filialas/index",array());?>"><img src="./images/icon-globe.png" alt="" />Filialai</a>
                        <ul class="sub-navigation">
                            <li><a href="<?php echo $this->createUrl("filialas/create",array());?>">Registruoti</a></li>
                            <li><a href="<?php echo $this->createUrl("sandelis/create",array());?>">Kurti sandėlius</a></li>
                            <li><a href="<?php echo $this->createUrl("sandelis/create",array());?>">Peržiūrėti sandėlius</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo $this->createUrl("statistika/index",array());?>"><img src="./images/icon-stats.png" alt="" />Statistika</a>
                    </li>
                </ul>
            </div>
        </div>

    <?php endif; ?>
	<div id="content-wrapper" class="full-width">
		<?php echo $content; ?>
		<div class="push"></div>
	</div>
	
	<div class="clear"></div>


</div>
<div id="footer">
	<p>Sistemos autoriai: <span>Vytautas Kiudys</span>, <span>Ernestas Juška</span>, <span>Benas Šilkaitis</span>, <span>Alvydas Poškevičius</span></p>
    <p>© Kodo Chirurgai, 2012</p>
</div>

</body>
</html>
