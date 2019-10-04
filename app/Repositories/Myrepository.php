<?php 
    namespace App\Repositories;

    use App\Repositories\RepositoryInterface;
    use App\Test;

    class Myrepository implements RepositoryInterface
    {
        public function signIn($request)
        {
            $test = new Test();
            $test->first_name = $request->first_name;
            $test->last_name = $request->last_name;
            $test->email = $request->email;
            $test->password = $request->password;
            $test->save();
            return $test;
        }
    }