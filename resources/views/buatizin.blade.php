<?php
	PDF::SetTitle('Hello World');

	PDF::AddPage();

	PDF::Write(0, 'Hello World');

	PDF::Output('hello_world.pdf');	
