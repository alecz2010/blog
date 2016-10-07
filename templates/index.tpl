<table>
    {foreach $names as $name}
        {strip}
            <tr bgcolor="{cycle values="#eee,#ddd"}">
                <td>{$name}</td>
            </tr>
        {/strip}
    {/foreach}
</table>

<table>
    {foreach $users as $user}
        {strip}
            <tr bgcolor="{cycle values="#aaa, #bbb"}">
                <td>{$user.name}</td>
                <td>{$user.phone}</td>
            </tr>
        {/strip}
    {/foreach}
</table>