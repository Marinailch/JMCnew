
<div class="container container_nav">
    <div class="row">
        <nav id="main">
            <nav id="main">

                <h5 class="directions_header_adm">Добавить модуль лабораторного исследования</h5>

                <form class="form-horizontal" method="POST" action="index.php">

                    <div class="form-group">
                        <label for="inputSuccess3">Добавить название модуля <br>лабораторного исследования</label>
                        <div class="col-sm-4">
                            <input type="text" name="name" class="form-control">
                        </div>
                    </div>

                    <textarea name="test"></textarea>
                    <!-- Trying new action-->

                    <input type="submit" class="form-horizontal" name="submit">
                </form>
                <script>
                    CKEDITOR.replace('test');
                </script>
                <h5 class="directions_header_adm">Редактировать/Удалить модуль лабораторного исследования</h5>
                <?php
                $i = 1;
                foreach ($res2 as $key => $value): ?>
                    <div class="" id="">
                        <nav style="margin-top: 20px;">
                            <div id="lab">
                                <div class="batton_del_panel_lab">
                                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#n<?= $i ?>">
                                        <img src="img/rec.png" title="Редактировать"  class="del_button" style="margin-right: -17px">
                                    </button>

                                    <a href="" >
                                        <img src="img/del.png" title="Удалить" class="del_button">
                                    </a>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="n<?= $i ?>" role="dialog">
                                    <div class="modal-dialog">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title"><?= $value['name'] ?></h4>
                                            </div>
                                            <div class="modal-body">
                                                <form class="form-horizontal" method="POST" action="index.php">

                                                    <div class="form-group">
                                                        <label for="n<?= $i ?>">Изменить название модуля <br>лабораторного исследования</label>
                                                        <div class="col-sm-4">
                                                            <input type="text" name="name" class="form-control" value="<?= $value['name'] ?>">
                                                        </div>
                                                    </div>

                                                    <textarea name="l<?= $i ?>"> <?= $value['description'] ?></textarea>
                                                    <script>
                                                        CKEDITOR.replace( 'l<?= $i ?>' );
                                                    </script>
                                                    <!-- Trying new action-->

                                                    <input type="submit" class="form-horizontal" name="submit">
                                                </form>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div id="n<?= $i ?>" class="lab_tabl">
                                    <?= $value['description'] ?>
                                </div>
                            </div>
                        </nav>
                    </div>
                    <?php
                    $i += 1;
                endforeach; ?>

            </nav>

    </div>

    </nav>
</div>
