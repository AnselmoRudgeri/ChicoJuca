<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row">
        <h4>Abaixo se encontra o Algoritmo que calcula quanto tempo Juca ira demorar para ultrapassar a altura de Chico </h4>
    </div>
    <hr>
    <div class="row row-margin-bottom">
        <div class="col-md-5 no-padding lib-item" data-category="view">
            <div class="lib-panel">
                <div class="row box-shadow">
                    <div class="col-md-6">
                        <a href="https://ibb.co/vzfJvKf"><img src="https://i.ibb.co/bdYrR8Y/te9yo-hprbj.png" alt="te9yo-hprbj" border="0"></a>
                    </div>
                    <div class="col-md-6">
                        <div class="lib-row lib-header">
                            Dados: Chico
                            <div class="lib-header-seperator"></div>
                        </div>
                        <div class="lib-row lib-desc">
                            Chico possui 1,50m e cresce por ano 2 cm
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-5 no-padding lib-item" data-category="ui">
            <div class="lib-panel">
                <div class="row box-shadow">
                    <div class="col-md-6">
                        <a href="https://imgbb.com/"><img src="https://i.ibb.co/wsVQ2Y9/juca.png" alt="juca" border="0"></a>
                    </div>
                    <div class="col-md-6">
                        <div class="lib-row lib-header">
                            Dados: Juca
                            <div class="lib-header-seperator"></div>
                        </div>
                        <div class="lib-row lib-desc">
                            Juca possui 1,10m e cresce 3cm por ano
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <h4>Juca demorará {{\App\Models\Calculo::calcular()}} anos para que supere a altura de Chico </h4>
    </div>
</div>
<style>
    body {
        padding: 20px;
        font-family: 'Open Sans', sans-serif;
        background-color: #f7f7f7;
    }

    .lib-panel {
        margin-bottom: 20Px;
    }
    .lib-panel img {
        width: 100%;
        background-color: transparent;
    }

    .lib-panel .row,
    .lib-panel .col-md-6 {
        padding: 0;
        background-color: #FFFFFF;
    }


    .lib-panel .lib-row {
        padding: 0 20px 0 20px;
    }

    .lib-panel .lib-row.lib-header {
        background-color: #FFFFFF;
        font-size: 20px;
        padding: 10px 20px 0 20px;
    }

    .lib-panel .lib-row.lib-header .lib-header-seperator {
        height: 2px;
        width: 26px;
        background-color: #d9d9d9;
        margin: 7px 0 7px 0;
    }

    .lib-panel .lib-row.lib-desc {
        position: relative;
        height: 100%;
        display: block;
        font-size: 13px;
    }
    .lib-panel .lib-row.lib-desc a{
        position: absolute;
        width: 100%;
        bottom: 10px;
        left: 20px;
    }

    .row-margin-bottom {
        margin-bottom: 20px;
    }

    .box-shadow {
        -webkit-box-shadow: 0 0 10px 0 rgba(0,0,0,.10);
        box-shadow: 0 0 10px 0 rgba(0,0,0,.10);
    }

    .no-padding {
        padding: 0;
    }

</style>
