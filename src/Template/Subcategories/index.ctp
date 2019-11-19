<?php
    $urlToRestApi = $this->Url->build('subcategories', true);
    echo $this->Html->scriptBlock('var urlToRestApi = "' . $urlToRestApi . '";', ['block' => true]);
    echo $this->Html->script('Subcategories/index', ['block' => 'scriptBottom']);

    $this->extend('/Layout/TwitterBootstrap/dashboard');
    $this->start('tb_actions');
?>

<?php
$this->end();
?>

<div class="container">
    <div class="row">
        <!-- <div class="panel panel-default cocktails-content">TODO A VERIFIER --> 
        <div class="panel panel-default subcategories-content">
            <div class="panel-heading">Subcategories <a href="javascript:void(0);" class="glyphicon glyphicon-plus" id="addLink" onclick="javascript:$('#addForm').slideToggle();">Add</a></div>
            <div class="panel-body none formData" id="addForm">
                <h2 id="actionLabel">Add Subcategorie</h2>
                <form class="form" id="subcategorieAddForm" enctype='application/json'>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" id="name"/>
                    </div>
                    <div class="form-group">
                        <label>categorie_id</label>
                        <input type="text" class="form-control" name="categorie" id="categorie"/>
                    </div>
                    <a href="javascript:void(0);" class="btn btn-warning" onclick="$('#addForm').slideUp();">Cancel</a>
                    <a href="javascript:void(0);" class="btn btn-success" onclick="subcategorieAction('add')">Add Subcategorie</a>
                    <!-- input type="submit" class="btn btn-success" id="addButton" value="Add Cocktail" -->
                </form>
            </div>
            <div class="panel-body none formData" id="editForm">
                <h2 id="actionLabel">Edit Subcategorie</h2>
                <form class="form" id="categorieEditForm" enctype='application/json'>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" id="nameEdit"/>
                    </div>
                    <div class="form-group">
                        <label>categorie_id</label>
                        <input type="text" class="form-control" name="categorieEdit" id="categorieEdit"/>
                    </div>
                    <input type="hidden" class="form-control" name="id" id="idEdit"/>
                    <a href="javascript:void(0);" class="btn btn-warning" onclick="$('#editForm').slideUp();">Cancel</a>
                    <a href="javascript:void(0);" class="btn btn-success" onclick="subcategorieAction('edit')">Update Subcategorie</a>
                    <!-- input type="submit" class="btn btn-success" id="editButton" value="Update Cocktail" -->
                </form>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th></th>
                        <th>Name</th>
                        <th>Categorie</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="subcategorieData">
                    <?php
                    $count = 0;
                    foreach ($subcategories as $subcategorie): $count++;
                        ?>
                        <tr>
                            <td><?php echo '#' . $count; ?></td>
                            <td><?php echo $subcategorie['name']; ?></td>
                            <td><?php echo $subcategorie['category_id']; ?></td>
                            <td>
                                <a href="javascript:void(0);" class="glyphicon glyphicon-edit" onclick="editSubcategorie('<?php echo $subcategorie['id']; ?>')"></a>
                                <a href="javascript:void(0);" class="glyphicon glyphicon-trash" onclick="return confirm('Are you sure to delete data?') ? subcategorieAction('delete', '<?php echo $subcategorie['id']; ?>') : false;"></a>
                            </td>
                        </tr>
                        <?php
                    endforeach;
                    ?>
                    <tr><td colspan="5">No subcategorie(s) found......</td></tr>
                </tbody>
            </table>
        </div>
    </div>
</div>