{extends file="base.tpl"}
{block name="content"}

<h4>Add New Role or Edit Existing One</h4>
<div class="form-group col-md-4">
<form method="POST" action="">
    <label for="name">Name</label>
    <input class="form-control" type="text" name="name" id="name" value="{if isset($smarty.session.name)}{$smarty.session.name}{/if}">
    <input class="btn btn-primary" type="submit" value="Save" name="save_role">
    <input type="hidden" value="{if isset($smarty.session.id)}{$smarty.session.id}{/if}" name="id">
</form>

</div>

{/block}