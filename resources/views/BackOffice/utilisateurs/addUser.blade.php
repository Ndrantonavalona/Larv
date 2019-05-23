@extends('layouts.app')
@section('content')
<script src="/js/BackOffice/userAdd.js?v=1.3"></script>
<div class="box">
    <div class="box-content" style="padding-bottom:0px !important; padding-top:0px !important;">
        <form name="frmCreate" action="{{isset($user->id) ? route('updateUser', ['id' => $user->id]) : route('validUser')}}" method="post" id="frmCreate">
            <h3>Utilisateur {{isset($user->id) ? $user->id : ''}}</h3>
            <input type="Hidden" name="id" value="{{isset($user->id) ? $user->id : ''}}">
            <input type="hidden" name="_token" value="{{csrf_token()}}" />
            <input type="hidden" id="alertUtilisateur" value="{{isset($user->id) ? 'maj' : 'add'}}" />
            <?php
            if(isset($user->id)) {
                $idCivilite = $user->civilite;
                $idTypeUtilisateur = $user->typeUtilisateur;
                $idStatut = $user->actif;
            }
            else {
                $idCivilite = '';
                $idTypeUtilisateur = '';
                $idStatut = '';
            }
            ?>
            <div class="row" >
                <div class="col-sm-4">
                    <div class="box box-color box-bordered ">
                        <div class="box-title">
                            <h3>
                                <span>Donn&eacute;es g&eacute;n&eacute;rales</span>
                            </h3>

                        </div>
                        <div class="box-content" style="min-height: 320px;">

                            <div class="form-group">
                                <label for="civilite" class="control-label col-sm-4">Civilit&eacute;*</label>
                                <div class="col-sm-8" style="padding-bottom: 10px;">
                                    <select name="civilite" class="form-control" data-rule-required="true" data-msg-required="Données obligatoires">
                                        <option value="" selected>&nbsp;</option>
                                        @foreach($paramValeur1 as $parametreCivilite)
                                            <option value="{{$parametreCivilite->id}}" @if($idCivilite == $parametreCivilite->id) selected @endif>{{$parametreCivilite->valeur}}</option>
                                        @endforeach()
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="prenom" class="control-label col-sm-4">Pr&eacute;nom*</label>
                                <div class="col-sm-8" style="padding-top: 10px; padding-bottom: 10px;">
                                    <input type="text"  name="prenom" value="{{isset($user->prenom) ? $user->prenom : ''}}" class="form-control" data-rule-required="true" data-msg-required="Données obligatoires" autocomplete="off">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="nom" class="control-label col-sm-4">Nom* </label>
                                <div class="col-sm-8" style="padding-top: 10px; padding-bottom: 10px;">
                                    <input type="text"  name="nom" value="{{isset($user->name) ? $user->name : ''}}" class="form-control" data-rule-required="true" data-msg-required="Données obligatoires" autocomplete="off">
                                </div>
                            </div>

                            <!--<div class="form-group">
                                <label for="profil" class="control-label col-sm-4">Profil*</label>
                                <div class="col-sm-8">
                                    <select name="cmbProfil" id="cmbProfil" class="form-control" data-rule-required="true">
                                        <option value="" selected>&nbsp;</option>
                                    </select>
                                </div>
                            </div>-->

                            <div class="form-group">
                                <label for="login" class="control-label col-sm-4">Login* </label>
                                <div class="col-sm-8" style="padding-top: 10px; padding-bottom: 10px;">
                                    <input type="text"  name="login" value="{{isset($user->login) ? $user->login : ''}}" class="form-control" data-rule-required="true" data-msg-required="Données obligatoires" autocomplete="off">
                                </div>
                            </div>
                            @if(!isset($user->id))
                                <div class="form-group">
                                    <label for="password" class="control-label col-sm-4">Mot de passe*</label>
                                    <div class="col-sm-8" style="padding-top: 10px; padding-bottom: 10px;">
                                        <input type="password" name="motDePasse" value="" class="form-control" data-rule-required="true" data-msg-required="Données obligatoires" autocomplete="off">
                                    </div>
                                </div>
                            @endif
                            <div class="form-group">
                                <label for="typeUtilisateur" class="control-label col-sm-4">Type utilisateur*</label>
                                <div class="col-sm-8" style="padding-top: 10px; padding-bottom: 10px;">
                                    <select name="typeUtilisateur" class="form-control" data-rule-required="true" data-msg-required="Données obligatoires">
                                        <option value="0" selected>&nbsp;</option>
                                        <!--Type Utilisateur Profil-->
                                        @foreach($paramValeur3 as $paramValeurTypeUtilisateur)
                                            <option value="{{$paramValeurTypeUtilisateur->id}}" @if($idTypeUtilisateur == $paramValeurTypeUtilisateur->id) selected @endif>{{$paramValeurTypeUtilisateur->valeur}}</option>
                                        @endforeach()
                                    </select>
                                </div>
                            </div>

                            <!--<div class="form-group">
                                <label for="operateur" class="control-label col-sm-4">Entit&eacute;*</label>
                                <div class="col-sm-8">
                                    <select name="idEntite" class="form-control" data-rule-required="true">
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>-->

                            <div class="form-group">
                                <label for="operateur" class="control-label col-sm-4">Statut*</label>
                                <div class="col-sm-8" style="padding-top: 10px; padding-bottom: 10px;">
                                    <select name="actif" class="form-control" data-rule-required="true" data-msg-required="Données obligatoires">
                                        <option value=""></option>
                                        @foreach($paramValeur2 as $paramStatus)
                                            <option value="{{$paramStatus->id}}" @if($idStatut == $paramStatus->id) selected @endif>{{$paramStatus->valeur}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="box box-color box-bordered ">
                        <div class="box-title">
                            <h3>
                                <span>Contact</span>
                            </h3>
                        </div>
                        <div class="box-content">
                            @if(!isset($user->id))
                            <div class="form-group">
                                <label for="email" class="control-label col-sm-4">E-mail*</label>
                                <div class="col-sm-8" style="padding-bottom: 10px;">
                                    <input type="text"  name="email" id="txt_email" value="{{isset($user->email) ? $user->email : ''}}" class="form-control" data-rule-required="true" data-msg-required="Données obligatoires" autocomplete="off">
                                </div>
                            </div>
                            @endif

                            <div class="form-group">
                                <label for="telBureau" class="control-label col-sm-4">T&eacute;l. bureau</label>
                                <div class="col-sm-8" style="padding-top: 10px; padding-bottom: 10px;">
                                    <input type="text"  name="telBureau" value="{{isset($user->telBureau) ? $user->telBureau : ''}}" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="telPortable" class="control-label col-sm-4">T&eacute;l. portable</label>
                                <div class="col-sm-8" style="padding-top: 10px; padding-bottom: 10px;">
                                    <input type="text"  name="telPortable" value="{{isset($user->telPortable) ? $user->telPortable : ''}}" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="form-group" style="margin-bottom:0px; padding-right:2px;">
                        <div class="form-actions" style="float:right; float:right; padding-right:2% !important;">
                            <a href="{{route('listUtilisateur')}}">
                                <button type="button" id="submitMoteur" class="btn btn-primary" style="width:150px">
                                    <i class="glyphicon-search"></i>
                                    Rechercher
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="form-actions" style="float:right; padding-right:0px !important;">
                        <button type="submit" id="submitFrm" class="btn btn-primary" style="margin-right:-3px;">
                            <i class="glyphicon-circle_ok"></i>
                            Enregistrer
                        </button>
                    </div>
                </div>

            </div>
            <input type="Hidden" name="cmdValider" value="1">
            <input type="Hidden" name="idUtilisateur" value="">
        </form>
    </div>
</div>
@endsection