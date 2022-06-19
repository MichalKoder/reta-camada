{extends file="base.tpl"}
{block name="content"}

<h4>Add New Candidate or Edit Existing One</h4>
<div class="form-group col-md-4">
{if !empty($roles)}
<form method="POST" action="">
    <label for="name">Name</label>
    <input class="form-control" type="text" name="name" id="name" value="{if isset($smarty.session.name)}{$smarty.session.name}{/if}">

    <label for="age">Age</label>
    <input class="form-control" type="number" min="0" max="200" name="age" id="age" value="{if isset($smarty.session.age)}{$smarty.session.age}{/if}">

    <label for="date_of_application">Date of application</label>
    <input class="form-control" type="date" name="date_of_application" id="date_of_application" value="{if isset($smarty.session.date_of_application)}{$smarty.session.date_of_application}{/if}">

    <label for="role">Role</label>
        <select class="form-control" name="roleID" id="roles">
            {foreach $roles as $role}
            <option value="{$role['ID']}">{$role['name']}</option>
            {/foreach}
        </select>
    <input class="btn btn-primary" type="submit" value="Save" name="save_candidate">
    <input type="hidden" value="{if isset($smarty.session.id)}{$smarty.session.id}{/if}" name="id">
</form>
{else}
<p>You must add at least one role (can be 'Undefined' if you don't want to specify candidate's role now).</p>
{/if}
</div>

{/block}