<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Festival des Films en Plein Air - Admin</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="../theme/01.Default/html/css/bootstrap.css">
    <!--Main styles-->
    <link rel="stylesheet" type="text/css" href="../theme/01.Default/html/css/main.css">
    <!--Adaptive styles-->
    <link rel="stylesheet" type="text/css" href="../theme/01.Default/html/css/adaptive.css">
    <!--Swipe menu-->
    <link rel="stylesheet" type="text/css" href="../theme/01.Default/html/css/pushy.css">
    <!--fonts-->
    <link rel="stylesheet" type="text/css" href="../theme/01.Default/html/css/font-awesome.css">
    <!--animation css-->
    <link rel="stylesheet" type="text/css" href="../theme/01.Default/html/css/animate.css">
    <!-- Custom CSS of heaven -->
    <link href="https://fonts.googleapis.com/css?family=Passion+One" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="inner_page innerpage">
<div class="bg_parallax" id="inb">

    <div id="container">
        <div class="container page_info">
            <div class="col_md_12">
                <h1>Panel Admin</h1>
                <p class="lead">Ici, vous pouvez ajouter, modifier et supprimer des annonces.</p>
            </div>
        </div>
        <div class="container contant">
            <div class="row">
                <div class="col-md-12">
                    <?php if ($success !== null): ?>
                        <div class="notification bg-primary">
                            <?php echo $success; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <div class="row">

                <!--content-->
                <div class="col-md-12 basic">

                    <div class="reviews open">

                        <!--add news-->
                        <div class="add_comment">

                            <form method="POST" class="full-width-form">
                                <h4>Ajouter une annonce</h4>
                                <input type="text" name="ad[title]" placeholder="Titre">
                                <textarea name="ad[content]" placeholder="Contenu"></textarea>
                                <input type="submit" class="btn btn-success" value="Ajouter l'annonce">
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">

                <!--content-->
                <div class="col-md-12 basic">

                    <div class="reviews open">

                        <form method="POST" class="full-width-form" id="ad-edit-form">
                            <input type="hidden" name="ad[id]">
                            <input type="hidden" name="ad[title]">
                            <input type="hidden" name="ad[content]">
                        </form>
                        <table class="full-width-table">
                            <thead>
                                <tr>
                                    <th>Actions</th>
                                    <th>Date</th>
                                    <th>Titre</th>
                                    <th>Contenu</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (empty($Ads)): ?>
                                    <tr>
                                        <td colspan="4">Aucune annonce n'a été publiée</td>
                                    </tr>
                                <?php else: ?>
                                    <?php foreach ($Ads as $Ad): ?>
                                        <tr class="ad" data-ad-id="<?php echo $Ad->get("id"); ?>">
                                            <td>
                                                <a href="#" class="btn btn-success edit-button">Editer</a>
                                                <a href="?action=delete&id=<?php echo $Ad->get('id'); ?>" class="btn btn-danger">Supprimer</a>
                                            </td>
                                            <td>
                                                <?php echo date("d/m/Y à H:i:s", $Ad->get("date")); ?>
                                            </td>
                                            <td>
                                                <input type="text" name="ad[title]" value="<?php echo htmlspecialchars($Ad->get("title")); ?>">
                                            </td>
                                            <td>
                                                <textarea name="ad[content]"><?php echo nl2br(htmlspecialchars($Ad->get("content"))); ?></textarea>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!--
#################################
- SCRIPT FILES -
#################################
-->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="../theme/01.Default/html/js/jquery.min.js"></script>
<!--Bootstrap js-->
<script src="../theme/01.Default/html/js/bootstrap.min.js"></script>

<!--Slider revolution settings-->
<script type="text/javascript">
    jQuery(document).ready(function() {
        "use strict";

        $('.edit-button').click(function(e) {
            e.preventDefault();
            var $ad = $(this).closest('.ad'),
                adId = $ad.attr('data-ad-id'),
                adTitle = $ad.find("input[name='ad[title]']").val(),
                adContent = $ad.find("textarea[name='ad[content]']").val();

            $('#ad-edit-form input[name="ad[id]"]').val(adId);
            $('#ad-edit-form input[name="ad[title]"]').val(adTitle);
            $('#ad-edit-form input[name="ad[content]"]').val(adContent);
            $('#ad-edit-form').submit();
        });
    }); //ready
</script>

</body>
</html>