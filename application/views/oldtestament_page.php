<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!---------------------------------------------------------------->
<!---------------------------MAIN BLOCK--------------------------->
<!---------------------------------------------------------------->
<!------><div class="row"><!------------------>
    <!-------------------------------------------->
    <div class="col-md-4">
        <div class="card">
            <div class="card-title-w-btn">
                <h3 class="title">Параллельные ссылки</h3>
            </div>
            <div class="card-body">
                <div class="btn-group btn-group-justified">
                    <a class="btn btn-default" href="#" onclick="left_fu_old('/oldtestament?book=<?=$kn;?>&translate=<?=$real_translate;?>&chapter=<?=$chapter;?>',<?=$num_chap;?>);false;"><<<<</a>
                    <a class="btn btn-default" id="parallel_verses_old" href="#">ВКЛ/ВЫКЛ</a>
                    <a class="btn btn-default" href="#" onclick="right_fu_old('/oldtestament?book=<?=$kn;?>&translate=<?=$real_translate;?>&chapter=<?=$chapter;?>',<?=$num_chap;?>);false;">>>>></a>
                </div>
            </div>

        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-title-w-btn">
                <h3 class="title">Выбор главы</h3>
            </div>
            <div class="card-body">
                <select name='chapt' class="form-control" id="selection_old" onchange="load_chapter_old('/oldtestament?book=<?=$kn;?>&translate=<?=$real_translate;?>&chapter=');">
                    <option selected disabled>Выберите главу</option>
                    <?php
                    for($i=1;$i<=$num_chap;$i++) echo "<option value='$i'>$i</option>";
                    ?>
                </select>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-title-w-btn">
                <h3 class="title">Выбор перевода</h3>
            </div>
            <div class="card-body">
                <select name='transl' class="form-control" id="sel_translate_old" onchange="change_translate_old('/oldtestament?book=<?=$kn;?>&chapter=<?=$chapter;?>&translate=');">
                    <option selected disabled>Выберите перевод</option>
                    <?php
                    foreach($translate as $trans) echo "<option value='",$trans['perevod'],"'>",$trans['select'],"</option>";
                    ?>
                </select>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-title-w-btn">
                <h3 class="title"><?=$title_kn;?>, Глава <?=$chapter;?>, <?=$translate_select;?></h3>
            </div>
            <div class="card-body">
                <?php
                foreach($text_book as $tb)
                {
                    if(strlen($tb[$real_translate])<10){echo 'Нет текста с этим переводом'; break;}
                    if($real_translate=='grek'){echo "<div style='font-family: Greek Old Face C;'>",'<sup>',$tb['st_no'],'</sup>',$tb[$real_translate],"</div>";}
                    else if($real_translate=='csya_old'){echo "<div style='font-family: Irmologion ieUcs; font-size: 18px;'>",'<sup>',$tb['st_no'],'</sup>',$tb[$real_translate],"</div>";}
                    else {echo "<span style='font-family: Roboto Condensed'>",'<sup>',$tb['st_no'],'</sup>',$tb[$real_translate],"</span>";}
                    if(strlen($tb['parallel'])>5) echo "<p style='font-family: Lobster; font-size: 12px;' class='parallel_link_old'>",$tb['parallel'],"</p>";
                }
                ?>
            </div>
        </div>
    </div>
    <!------------------------------->
    <!------></div><!---------------->
<!---------------------------------------------------------------->
<!-------------------------END MAIN BLOCK------------------------->
<!---------------------------------------------------------------->
