<?php get_header('app'); ?>
<div class="bg-gray-400 p-4 my-12">
	<div class="flex gap-8">
		<div class="basis-4/12 bg-gray-800 text-white rounded-md p-4">
			<ul class="flex flex-col gap-2 text-base font-semibold">
				<li class="bg-gray-700 hover:bg-gray-800 px-4 py-1">
					<a href="#">PROJECTS</a>
				</li>
				<li class="bg-gray-700 hover:bg-gray-800 px-4 py-1">
					<a href="#">DOMAINS</a>
				</li>
				<li class="bg-gray-700 hover:bg-gray-800 px-4 py-1">
					<a href="#">SERVICE LEVEL AGREEMENTS</a>
				</li>
			</ul>
		</div>
		<div class="basis-8/12">
			<p class="font-medium text-lg">
				You currently have no domains attached to your account.
			</p>
		</div>
	</div>
</div>
<?php get_footer('app'); ?>
