<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Subcategory[]|\Cake\Collection\CollectionInterface $subcategories
 */
?>

<?php
    $urlToRestApi = $this->Url->build([
        'prefix' => 'api',
        'controller' => 'Subcategories'], true);
    echo $this->Html->scriptBlock('var urlToRestApi = "' . $urlToRestApi . '";', ['block' => true]);
    echo $this->Html->script('Subcategories/index', ['block' => 'scriptBottom']);
?>

<div class="container" ng-app="app" ng-controller="SubcategoryCRUDCtrl">
    <div class="row">
        <!-- <div class="panel panel-default cocktails-content">TODO A VERIFIER --> 
        <div class="panel panel-default subcategories-content">
            <div class="panel-heading">Subcategories <a href="javascript:void(0);" class="glyphicon glyphicon-plus" id="addLink" onclick="javascript:$('#addForm').slideToggle();">Add</a></div>
            <div class="panel-body none formData" id="addForm">
                <h2 id="actionLabel">Add Subcategorie</h2>
                <form class="form" id="subcategoryAddForm" enctype='application/json'>

                    <div class="form-group">
                    
                        <label width="100">Name:</label>
                        <input type="text" id="name" ng-model="subcategory.name" />

                    </div>
                    <div class="form-group">

                        <label width="100">Category Id:</label>
                        <input type="text" id="description" ng-model="subcategory.category_id" />

                    </div>

                    <!-- <a href="javascript:void(0);" class="btn btn-warning" onclick="$('#addForm').slideUp();">Cancel</a> -->
                    <a class="btn btn-warning" onclick="$('#addForm').slideUp();">Cancel</a>
                    <!-- <a href="javascript:void(0);" class="btn btn-success" ng-click="addSubcategory(subcategory.name, subcategory.category_id)">Add Subcategory</a> -->
                    <a class="btn btn-success" ng-click="addSubcategory(subcategory.name, subcategory.category_id)">Add Subcategory</a>
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
                        <input type="text" class="form-control" name="subcategorieEdit" id="subcategorieEdit"/>
                    </div>
                    <input type="hidden" class="form-control" name="id" id="idEdit"/>
                    <a class="btn btn-warning" onclick="$('#editForm').slideUp();">Cancel</a>
                    <!-- <a href="javascript:void(0);" class="btn btn-warning" onclick="$('#editForm').slideUp();">Cancel</a> -->
                    <a class="btn btn-success" ng-click="updateSubcategory(subcategory.id, subcategory.name, subcategory.category_id)">Update Subcategory</a> 
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
                                <a ng-click="getSubcategory(subcategory.id)">Get Cocktail</a>  
                                <a ng-click="deleteSubcategory(subcategory.id)">Delete Cocktail</a>
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


<div class="container" ng-app="app" ng-controller="SubcategoryCRUDCtrl">
    <table ng-init="getAllSubcategories">
        <tr>
            <th>
                Name
            </th>
            <th>
                Category Id
            </th>
        </tr>
        <tr ng-repeat="subcategory in subcategories">
            <td>{{subcategory.name}}</td>
            <td>{{subcategory.categorie_id}}</td>
        </tr>
    </table>
</div>
