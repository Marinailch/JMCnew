<?php foreach ($directions->getDirections() as $key => $value): ?>
    <div><?= $value['name_of_direction'] ?>
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal"
            data-target="#n<?= $value['id'] ?>">
        <img src="/Admin/img/rec.png" title="Редактировать" class="del_button"
             style="margin-right: -17px;">
    </button></div>

<!-- ------------------------------------------------------------------------------------------------------------ -->
<!-- ---------------------------------------МОДАЛЬНОЕ ОКНО ДЛЯ БЛОГА--------------------------------------------- -->
<!-- ------------------------------------------------------------------------------------------------------------ -->
    <div class="modal fade" id="n<?= $value['id'] ?>" role="dialog">
        <div class="modal-dialog" style="width: 1200px">
            <div class="modal-content" style="height: 800px;">
                <div class="modal-header">
                    <button type="button" class="close"
                            data-dismiss="modal">&times;
                    </button>
                    <h4 class="modal-title">Изменение данных о направлении</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group" style="margin-left: 0; margin-right: 0px;">
                                    <p style="font-weight: 600; font-size: 12px; margin-top: 0px; margin-left: 0px;">
                                        Изменить описание направления <?= $value['name_of_direction']?></p>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="priceID"  value="<?= $value['id'] ?>">
                        <textarea id="test<?= $value['id'] ?>"
                                  name="description_direction"><?= $value['description_direction'] ?></textarea>
                        <script>
                            CKEDITOR.replace('test<?= $value['id']?>');
                        </script>
                        <input type="submit" class="form-horizontal" value="Сохранить"
                               formaction="<?= $_SERVER['PHP_SELF'] ?>?page=saveDirectionDescrByID">
                    </form>
                </div>
            </div>
        </div>
    </div>

<!-- ------------------------------------------------------------------------------------------------------------ -->
<!-- --------------------------------КОНЕЦ МОДАЛЬНОГО ОКНА ДЛЯ БЛОГА--------------------------------------------- -->
<!-- ------------------------------------------------------------------------------------------------------------ -->
<?php endforeach; ?>