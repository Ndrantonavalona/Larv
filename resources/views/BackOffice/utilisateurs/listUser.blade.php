@extends('layouts.app')
@section('content')
<script src="/js/BackOffice/userSearch.js?v=1.3"></script>
<div class="box">
    <style>
        li.statut:hover{
            background-color: white !important;
            color: black !important;
        }
        li.statutExact:hover{
            background-color: white !important;
            color: red !important;
        }
        .theme-darkblue .box .box-title .tabs > li.activeCreate > a{
            color: #fff;
            background: #204e81 !important;
            border: 1px solid #204e81;
        }
    </style>
    <div class="box-title " style="border-bottom:none;margin-top: 0px !important;">

        <div class="col-sm-8" style="margin-top: 10px;">

            <h3>
                <strong>Utilisateurs</strong>
            </h3>
            <ul class="tabs" style="float:left;padding-left: 5px;">
                <li class='active'>
                    <a href="{{route('listUtilisateur')}}" ><!--data-toggle="tab"-->
                        <i class="glyphicon-search" style="margin-top:-2px;"></i>
                        Recherche
                    </a>
                </li>
                <li>
                    <a href="{{route('addUser')}}" ><!--data-toggle="tab"-->
                        <i class="glyphicon-edit" style="margin-top:-5px;"></i>
                        Cr&eacute;ation
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <style>
        container-fluid .box-content{padding-bottom:0px !important; padding-right:2px !important;}
        #ms-input-0 input{border: 1px solid #FFF !important }
        .select2-arrow{z-index: 999!important;}
    </style>

    <div class="box-content cadre1" style="margin-top:5px !important;">
        <form name="moteur" action="" method="POST" class="form-validate form-horizontal" id="moteur">
            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="nameUtilisateur" class="control-label col-sm-3" >Utilisateur</label>
                        <div class="col-sm-9">
                            <input type="text" name="nameUtilisateur" id="nameUtilisateur" value="" class="form-control valid" style="border-color: #368ee0!important;">
                        </div>
                    </div>
                </div>
                <div class="col-sm-3" style="padding-left:0px;">
                    <div class="form-group">
                        <label for="cmbStatut" class="control-label col-sm-3">Statut</label>
                        <div class="col-sm-9">
                            <select  name="cmbStatut" size="1" id="cmbStatut" class="select2-me"  style="width: 115%;">
                                <option value="">Tous</option>
                                <option value="7">Inactif</option>
                                <option value="6">Actif</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group" style="margin-bottom:10px; padding-right:15px;">
                        <div class="form-actions" style="float:right !important; padding:0px !important;">
                            <button type="button" id="submitRechercher" class="btn btn-primary" >
                                <i class="glyphicon-search"></i>
                                Rechercher
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <input type="hidden" id="ajaxOrder" value="1">
            <input type="hidden" id="idPagination" value="1">
        </form>
    </div>
    <div class="row">
        <div class="col-sm-12" style="margin-top: 20px;">
            <div class="box" id="containerResult"></div>
        </div>
    </div>
    <style>
        #modalBloc {
            width:300px;
            /*height:140px;*/
            position:absolute;
            left:50%;
            top:50%;
            margin:-70px 0 0 -150px;
        }
    </style>
</div>
@endsection
