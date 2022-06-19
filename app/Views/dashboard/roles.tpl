{extends file="base.tpl"}
{block name="content"}
<h4>Manage Roles List</h4>
<form method="POST" action="">
<input class="btn btn-primary" type="submit" value="New Role" name="new_role">
</form>
{if empty($roles)}
<p class="prompt">There are no roles.</p>
{else} 
<table class="table">
    <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Action</th>
    </thead>
    <tbody>
    {foreach $roles as $role}
        <tr>
            <td>{$role['ID']}</td>
            <td>{$role['name']}</td>
            <td>
                <form method="POST" action="">
                    <input class="btn btn-primary" type="submit" value="Edit" id="edit_role" name="edit_role">
                    <input class="btn btn-danger" type="submit" value="Delete" id="delete_role" name="delete_role">
                    <input type="hidden" value="{$role['ID']}" name="id">
                    <input type="hidden" value="{$role['name']}" name="name">
                </form>
            </td>
        </tr>
    {/foreach}
    </tbody>
</table>

{/if}
{/block}
