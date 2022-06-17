{extends file="base.tpl"}
{block name="content"}

<h4>Add New Candidate or Edit Existing One</h4>
<div class="form-group col-md-4">
<form method="POST" action="">
    <label for="name">Name</label>
    <input class="form-control" type="text" name="name" id="name" value="{if !isset($smarty.post.new_candidate)}{$smarty.session.name}{/if}">

    <label for="age">Age</label>
    <input class="form-control" type="number" min="0" max="200" name="age" id="age" value="{if !isset($smarty.post.new_candidate)}{$smarty.session.age}{/if}">

    <label for="date_of_application">Date of application</label>
    <input class="form-control" type="date" name="date_of_application" id="date_of_application" value="{if !isset($smarty.post.new_candidate)}{$smarty.session.date_of_application}{/if}">

    <label for="role">Role</label>
    <input class="form-control" type="text" name="role" id="role" value="{if !isset($smarty.post.new_candidate)}{$smarty.session.role}{/if}">
    <!-- {if !empty($candidates)}
        <select class="form-control" name="candidates[]" id="candidates">
            {foreach $candidates as $candidate}
            <option value="{$candidate->id}">{$candidate->name}</option>
            {/foreach}
        </select>
    {/if} -->
    <input class="btn btn-primary" type="submit" value="Save" name="save_candidate">
</form>

</div>

{/block}