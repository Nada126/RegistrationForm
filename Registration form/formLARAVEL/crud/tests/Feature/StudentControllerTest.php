<?php

namespace Tests\Feature;
use Illuminate\Support\Facades\Event ;
use Tests\TestCase;
use RefreshDatabase;
class  StudentControllerTest extends TestCase {
public function testCreateStudent()
{
    Event::fake(); //Prevent event listeners from firing

    //Simulate the form input data
    $studentData=[
        'FullName' => 'John Doe',
        'Address' => '123 Main street',
        'email' => 'johndo@example.com',
        'phone' => '1234567890',
        'birthdate' => '1990-01-01',
        'Username' => 'johndoe',
        'password' => 'password123',
    ];
    //Send a post request to the store endpoint 
    $response = $this->post(route('students.store'),$studentData);

    //Assert that the student was created and redirected to the index page
    $this->assertDatabaseHas('students',$studentData);
    $response->assertRedirect(route('students.index'));

    //Assert that the NewUserRegistered event was fired
    Event::assertDispatched(\App\Events\NewUserRegistered::class,function($event) use ($studentData){
    return $event->student->FullName === $studentData['FullName'];
});
}
}
?> 