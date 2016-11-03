<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    // 
    public function test1()
    {
         $this->call('GET', 'api/view');
         $this->assertResponseOk();
    }
    public function test2()
    {
        $this->get('api/view')
             ->seeJsonStructure([
                 '*' => [
                     'answer_id', 'user_id', 'created_at',"updated_at","completed_at","location","user","help"
                 ]
             ]);
    }

    public function test4()
    {
        $this->get('api/detail/57299b08adee95.11642452')
             ->seeJsonStructure([
                 '*' => [
                     'answer_id', 'user_id', 'question_id',"created_at", "answer","question","updated_at"
                 ]
             ]);
    }
    
    public function test5()
    {
        $this->call('GET','api/detail/57299b08adee95.11642452');
        $this->assertResponseOk();
    }
    public function test6()
    {
        $response=$this->call('GET','api/detail/1');
        $this->assertEquals(404, $response->status());
    }
    public function test7()
    {
        $response=$this->call('GET','api/detail/');
        $this->assertEquals(404, $response->status());
    }
    public function test8()
    {
        $response=$this->call('GET','api/detail');
        $this->assertEquals(404, $response->status());
    }
    public function test9()
    {
        $response=$this->call('GET','pdf');
        $this->assertEquals(404, $response->status());
    }
    public function test10()
    {
        $response=$this->call('GET','pdf/');
        $this->assertEquals(404, $response->status());
    }
    public function test11()
    {
        $response=$this->call('GET','pdf/1');
        $this->assertEquals(404, $response->status());
    }
    public function test12()
    {
        $response=$this->call('GET','pdf/57299b08adee95.11642452');
        $this->assertEquals(200, $response->status());
    }
    public function test13()
    {
        $response=$this->call('GET','api/checklists');
        $this->assertEquals(200, $response->status());
    }
    public function test14()
    {
        $this->get('api/checklists')
             ->seeJsonStructure([
                 '*' => [
                     'question_id', 'question', 'tools'
                 ]
             ]);
    }
    public function test15()
    {
        $response=$this->call('GET','api/symptoms');
        $this->assertEquals(200, $response->status());
    }
    public function test16()
    {
        $this->get('api/symptoms')
             ->seeJsonStructure([
                 '*' => [
                     'body_part', 'body_name', 'filename','filepath','url','solutions'
                 ]
             ]);
    }
    public function test17()
    {
        $response=$this->call('GET','api/symptom/head');
        $this->assertEquals(200, $response->status());
    }
    public function test18()
    {
        $response=$this->call('GET','api/symptom/x');
        $this->assertEquals(404, $response->status());
    }
    public function test19()
    {
        $response=$this->call('GET','api/symptom/');
        $this->assertEquals(404, $response->status());
    }
    public function test20()
    {
        $response=$this->call('GET','api/symptom');
        $this->assertEquals(404, $response->status());
    }
    public function test21()
    {
        $this->get('api/symptom/head')
             ->seeJsonStructure([
                     'body_part', 'body_name', 'filename','filepath','url','solutions'
             ]);
    }
    public function test22()
    {
        $response=$this->call('GET','api/exercises');
        $this->assertEquals(200, $response->status());
    }
    public function test23()
    {
        $this->get('api/exercises')
             ->seeJsonStructure([
                 '*' => [
                     'exercise_id', 'time', 'warning','instructions',"target_body_part"
                 ]
             ]);
    }
    public function test24()
    {
        $response=$this->call('GET','api/exercise/81afb572-0e10-11e6-870c-138e902713e8');
        $this->assertEquals(200, $response->status());
    }
    public function test25()
    {
        $response=$this->call('GET','api/exercise/x');
        $this->assertEquals(404, $response->status());
    }
    public function test26()
    {
        $response=$this->call('GET','api/exercise/');
        $this->assertEquals(404, $response->status());
    }
    public function test27()
    {
        $response=$this->call('GET','api/exercise');
        $this->assertEquals(404, $response->status());
    }
    public function test28()
    {
        $this->get('api/exercise/81afb572-0e10-11e6-870c-138e902713e8')
             ->seeJsonStructure([
                 '*' => [
                     'exercise_id', 'time', 'warning','instructions','target_body_part'
                 ]
             ]);
    }
    public function test29()
    {
        $response = $this->call('POST', 'api/user/checklists', ['email' => 'william.hidayat@gmail.com','user_id'=>'s4412906']);
        $this->assertEquals(201, $response->status());
    }
    public function test30()
    {
        $response = $this->call('POST', 'api/user/checklists', ['email' => 'william.hidayat@gmail.com']);
        $this->assertEquals(400, $response->status());
    }
    public function test31()
    {
        $response = $this->call('POST', 'api/user/checklists', ['email' => 'william.hidayat.com','user_id'=>'s4412906']);
        $this->assertEquals(400, $response->status());
    }
    public function test32()
    {
        $response = $this->call('POST', 'api/user/checklists', ['user_id'=>'s4412906']);
        $this->assertEquals(400, $response->status());
    }
    // public function test33()
    // {
    //     $response = $this->call('POST', 'api/checklists', ['answer_id'=>'575283074d7536.34487043','user_id' => 's4412906','user_id'=>'s4412906','location'=>'BEL','help'=>true,'answers'=>[['question_id'=>'3fcdb43e-1111-11e6-8d7d-32d2872d4aee','answer'=>'Yes']]]);
    //     $this->assertEquals(201, $response->status());
    // }
    public function test34()
    {
        $response = $this->call('POST', 'api/checklists', ['answer_id'=>'575283074d7536.34487043','user_id' => 's4412906','location'=>'BEL','help'=>true,'answers'=>[['question_id'=>'2f528446-1110-11e6-8d7d-32d2872d4aee','answer'=>'Yes']]]);
        $this->assertEquals(500, $response->status());
    }
    public function test35()
    {
        $response = $this->call('POST', 'api/checklists', ['user_id' => 's4412906','user_id'=>'s4412906','location'=>'BEL','help'=>true,'answers'=>[['question_id'=>'2f528446-1110-11e6-8d7d-32d2872d4aee','answer'=>'Yes']]]);
        $this->assertEquals(400, $response->status());
    }
    public function test36()
    {
        $response = $this->call('POST', 'api/checklists', ['answer_id'=>'575283074d7536.34487043','location'=>'BEL','help'=>true,'answers'=>[['question_id'=>'2f528446-1110-11e6-8d7d-32d2872d4aee','answer'=>'Yes']]]);
        $this->assertEquals(400, $response->status());
    }
    public function test37()
    {
        $response = $this->call('POST', 'api/checklists', ['answer_id'=>'575283074d7536.34487043','user_id' => 's4412906','help'=>true,'answers'=>[['question_id'=>'2f528446-1110-11e6-8d7d-32d2872d4aee','answer'=>'Yes']]]);
        $this->assertEquals(400, $response->status());
    }
    public function test38()
    {
        $response = $this->call('POST', 'api/checklists', ['answer_id'=>'575283074d7536.34487043','user_id' => 's4412906','location'=>'BEL','answers'=>[['question_id'=>'2f528446-1110-11e6-8d7d-32d2872d4aee','answer'=>'Yes']]]);
        $this->assertEquals(400, $response->status());
    }
    public function test39()
    {
        $response = $this->call('POST', 'api/checklists', ['answer_id'=>'575283074d7536.34487043','user_id' => 's4412906','location'=>'BEL','help'=>true]);
        $this->assertEquals(400, $response->status());
    }
    public function test40()
    {
        $response = $this->call('POST', 'api/checklists', ['answer_id'=>'575283074d7536.34487043','user_id' => 's4412906','location'=>'BEL','help'=>true,'answers'=>[['question_id'=>'2f528446-1110-11e6-8d7d-32d2872d4aee']]]);
        $this->assertEquals(500, $response->status());
    }
    public function test41()
    {
        $response = $this->call('POST', 'api/checklists', ['answer_id'=>'575283074d7536.34487043','user_id' => 's4412906','location'=>'BEL','help'=>true,'answers'=>[['answer'=>'Yes']]]);
        $this->assertEquals(500, $response->status());
    }
    public function test42()
    {
        $response = $this->call('POST', 'api/checklists', ['answer_id'=>'575283074d7536.34487043','user_id' => 's4412906','location'=>'BEL','help'=>true,'answers'=>[]]);
        $this->assertEquals(400, $response->status());
    }
    public function test43()
    {
        $this->get('api/tools/category')
             ->seeJsonStructure([
                 '*' => [
                     'tool_name'
                 ]
             ]);
    }
    
    public function test44()
    {
        $this->call('GET','api/tools/category');
        $this->assertResponseOk();
    }
    
    
    public function test53()
    {
        $response = $this->call('GET','picture/guide');
        $this->assertEquals(404, $response->status());
    }
    // public function test54()
    // {
    //     $response = $this->call('GET','picture/guide/1/1668ef00-1116-11e6-8d7d-32d2872d4aee');
    //     $this->assertEquals(200, $response->status());
    // }
    public function test55()
    {
        $response = $this->call('GET','picture/guide/1');
        $this->assertEquals(404, $response->status());
    }
    public function test3()
    {
        $response = $this->call('GET','picture/guide/1/1');
        $this->assertEquals(404, $response->status());
    }
    public function test56()
    {
        $response = $this->call('GET','api/guide/1668ef00-1116-11e6-8d7d-32d2872d4aee');
        $this->assertEquals(200, $response->status());
    }
    public function test57()
    {
        $response = $this->call('GET','api/guide');
        $this->assertEquals(404, $response->status());
    }
    public function test58()
    {
        $response = $this->call('GET','api/guide/1');
        $this->assertEquals(404, $response->status());
    }
    public function test45()
    {
        $response = $this->call('GET','api/guide/0/1668ef00-1116-11e6-8d7d-32d2872d4aee');
        $this->assertEquals(404, $response->status());
    }
    public function test46()
    {
        $response = $this->call('GET','api/body/exercise/neck');
        $this->assertEquals(200, $response->status());
    }
    public function test47()
    {
        $response = $this->call('GET','api/body/exercise/w');
        $this->assertEquals(404, $response->status());
    }
    public function test48()
    {
        $response = $this->call('GET','api/body/exercise/');
        $this->assertEquals(404, $response->status());
    }
    public function test49()
    {
        $response = $this->call('GET','api/body/exercise');
        $this->assertEquals(404, $response->status());
    }
    public function test50()
    {
       $this->get('api/body/exercise/neck')
             ->seeJsonStructure([
                '*' => [
                     'body_part','exercises'
                 ]
             ]);
    }
    public function test59()
    {
        $this->get('api/guide/1668ef00-1116-11e6-8d7d-32d2872d4aee')
             ->seeJsonStructure([
                '*'=>[
                     'guide_id','question_id','guide','file_name','file_path','url'
                     ]
             ]);
    }

}
