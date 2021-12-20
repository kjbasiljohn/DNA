<% include SideBar %>
<div class="content-container unit size3of4 lastUnit">
	<article>
        <h6>search: $Name</h6>
        <% with $Team %>
		<h1>$Name</h1>
        <div class="content">
            <h2>Level: $Type</h2>
            <h2>Mascot: $Mascot</h2>
            <h2>Season: <% if $Sport == 'rubgy' %> Winter <% else %> Summer<% end_if %></h2>

            <h2>Players:</h2>
            <ul>
                <% loop $Players %>
                    <li>$Name </li>
                <% end_loop %>
            </ul>
        </div>
        <% end_with %>
		

	</article>
		$Form
		$CommentsForm
</div>