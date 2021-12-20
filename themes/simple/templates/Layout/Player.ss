<% include SideBar %>
<div class="content-container unit size3of4 lastUnit">
	<article>
        <h6>search: $Name</h6>
        <% with $Player %>
		<h1>$Name</h1>
        <div class="content">

            <h2>Teams:</h2>
            <ul>
                <% loop $Teams %>
                    <li>
                        <h2>$Name </h2>
                        Level: $Type, Season: <% if $Sport == 'rubgy' %> Winter <% else %> Summer<% end_if %>
                    </li>
                <% end_loop %>
            </ul>
        </div>
        <% end_with %>
		

	</article>
		$Form
		$CommentsForm
</div>