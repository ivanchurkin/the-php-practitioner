<?php

class UsersController
{
    public function index()
    {
        /** @var QueryBuilder $db */
        $db = App::get('database');

        $users = $db->selectAll('names');

        return view('users', compact('users'));
    }

    public function store()
    {
        /** @var QueryBuilder $db */
        $db = App::get('database');

        $db->insert('names', [
            'name' => $_POST['name']
        ]);

        return redirect('users');
    }
}