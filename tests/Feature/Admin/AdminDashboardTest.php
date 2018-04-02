<?php

namespace Tests\Feature\Admin;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AdminDashboardTest extends TestCase
{
    use RefreshDatabase;

   /** @test */
   function admins_can_visit__the_admin_dashboard()
   {

       $this->actingAsAdmin()
           ->get(route('admin_dashboard'))
           ->assertStatus(200)
           ->assertSee('Admin Panel');
   }

   /** @test */
   function non_admin_users_cannot_visit_the_admin_dashobard()
   {


       $this->actingAsUser()
           ->get(route('admin_dashboard'))
           ->assertStatus(302)
           ->assertRedirect('admin/login');

   }

   /** @test */
   function guests_cannot_vist__the_admin_dashboard()
   {
       $this->get(route('admin_dashboard'))
           ->assertStatus(302)
           ->assertRedirect('admin/login');
   }


}
