<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\views\helpers\Alert;

/* @var $this yii\web\View */
/* @var $model app\models\Role */
/* @var $form yii\widgets\ActiveForm */
?>

<?= $success == true ? Alert::showSuccess() : ''; ?>

<div class="role-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>
    
    <div class="row">
          <div class="col-md-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Permissions</h3>
                </div>

                <!-- Table -->
                <table class="table">
                  <tbody>
                      <!--<%--<c:set var="currentEntity" value="${permissionsList.value}" />--%>-->
                      <!--<%--<c:out value="${currentEntity}" />--%>-->

                      <?php foreach ($processedPermissions as $entity=>$permissions) { ?>
                        <tr>
                            <td class="paddingtop20 bold bgeee" style="width:15%;">
                                <?= $entity; ?>
                            </td>

                            <td>
                                <?php foreach($permissions as $permission) { ?>
                                    <div class="col-sm-2">
                                      <label class="checkbox-inline">
                                          <?= Html::checkbox(
                                                  'Permission['.$permission->alias.']', //name
                                                  in_array($permission->id, $rolePermissions) ? true : false,  //checked
                                                  ['id'=> $permission->alias, 'value' => $permission->id] //options
                                              ); 
                                          ?>
                                          <?= $permission->title ?>
                                      </label>
                                    </div>
                                <?php } ?>
                            </td>
                        </tr>
                      <?php } ?>
                  </tbody>
                </table>
            </div>


          </div><!-- /.col -->
      </div> <!-- /.row -->
      
    
        

    <div class="form-group text-right">
            <?= 
                Html::submitButton(
                        $model->isNewRecord ? 'Create' : 'Update', 
                        ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary' ]
                        ) 
            ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>