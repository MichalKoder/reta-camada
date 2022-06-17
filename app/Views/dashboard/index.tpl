{extends file="base.tpl"}
{block name="content"}
<h4>Manage Candidates List</h4>
<form method="POST" action="dashboard/add_edit_candidate">
<input class="btn btn-primary" type="submit" value="New Candidate" name="new_candidate">
</form>
{if empty($candidates)}
<p class="prompt">There are no candidates.</p>
{else} 
<table class="table">
    <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Age</th>
        <th>Date_of_application</th>
        <th>Role</th>
        <th>Action</th>
    </thead>
    <tbody>
    {foreach $candidates as $candidate}
        <tr>
            <td>{$candidate['ID']}</td>
            <td>{$candidate['name']}</td>
            <td>{$candidate['age']}</td>
            <td>{$candidate['date_of_application']}</td>
            <td>{$candidate['role']}</td>
            <td>
                <form method="POST" action="">
                    <input class="btn btn-primary" type="submit" value="Edit" id="edit_candidate" name="edit_candidate">
                    <input class="btn btn-danger" type="submit" value="Delete" id="delete_candidate" name="delete_candidate">
                    <input type="hidden" value="{$candidate['ID']}" name="id">
                    <input type="hidden" value="{$candidate['name']}" name="name">
                    <input type="hidden" value="{$candidate['age']}" name="age">
                    <input type="hidden" value="{$candidate['date_of_application']}" name="date_of_application">
                    <input type="hidden" value="{$candidate['role']}" name="role">
                </form>
            </td>
        </tr>
    {/foreach}
    </tbody>
</table>

{/if}
{/block}
