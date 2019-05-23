@if ($count > 0)
<div class="box">
    <style>
        a.info1 {
            position: relative;
            color: black;
            text-decoration: none;
            /*border-bottom: 1px gray dotted;  On souligne le texte. */
        }
        a.info1 span {
            display: none;
        }
        a.info:hover {
            background: none;
            z-index: 500;
            /*cursor: help;*/
        }
        a.info1:hover span {
            display: block;
            position: absolute;
            white-space: Inherit;
            top: 20px;
            left: 20px;
            background: #FFF;
            color: black;
            padding: 6px;
            border: 1px solid #54b1d5;
            border-left: 1px solid #54b1d5;
            width : 500px;
            text-align : justify;
        }
        a.info {
            position: relative;
            color: black;
            text-decoration: none;
            /*border-bottom: 1px gray dotted;  On souligne le texte. */
        }
        a.info span {
            display: none;
        }
        a.info:hover {
            background: none;
            z-index: 500;
            /*cursor: help;*/
        }
        a.info:hover span {
            display: block;
            position: absolute;
            white-space: Inherit;
            top: 20px;
            left: -200px;
            background: #FFF;
            color: black;
            padding: 6px;
            border: 1px solid #54b1d5;
            border-left: 1px solid #54b1d5;
            width : 500px;
            text-align : justify;
        }
    </style>
    <div class="box-content nopadding">
        <table border="0" aria-describedby="tableResult_info" class="table table-hover table-nomargin table-bordered">
            <thead>
            <tr style="">
                <th id="colTri_0" width="5%">Id</th>
                <th id="colTri_2" width="15%">Utilisateur</th>
                <th id="colTri_4" width="15%">Email</th>
                <!--<th id="colTri_6" width="15%">Profil</th>-->
                <th id="colTri_8" width="25%">Tel. bureau</th>
                <th id="colTri_10" width="25%">Tel. portable</th>
                <th id="colTri_12" width="15%">Actif</th>
            </tr>
            </thead>
            <tbody>
            @csrf
            @foreach($allUsers as $users)
                <tr>
                    <td class="tableTdLeft" style="text-align:center;">
                        <a href="{{route('updateUser', ['id' => $users->id])}}" id="idUtilisateur_{{$users->id}}">
                            {{$users->id}}
                        </a>
                    </td>
                    <td>{{$users->prenom}} {{$users->name}}</td>
                    <td>{{$users->email}}</td>
                <!--<td>{{-->//$users->profil<!--}}</td>-->
                    <td class="tableTdRight">{{$users->telBureau}}</td>
                    <td>{{$users->telPortable}}</td>
                    <td>
                        <?php
                        if ($users -> actif == 6)
                            echo 'Actif';
                        else if ($users -> actif == 7)
                            echo 'Actif';
                        else
                            echo 'Non renseigné';
                        ?>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@else
    <strong>Aucun résultat trouvé.</strong>
@endif
