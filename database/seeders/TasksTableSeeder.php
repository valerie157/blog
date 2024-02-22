
<?php
use Illuminate\Database\Seeder;
use App\Models\Task;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create some sample tasks
        Task::create([
            'task_name' => 'Task 1',
            'description' => 'Description for Task 1',
            'due_date' => now()->addDays(7),
            'status' => 'Pending',
        ]);

        Task::create([
            'task_name' => 'Task 2',
            'description' => 'Description for Task 2',
            'due_date' => now()->addDays(10),
            'status' => 'Completed',
        ]);

        Task::create([
            'task_name' => 'Task 3',
            'description' => 'Description for Task 3',
            'due_date' => now()->addDays(5),
            'status' => 'In Progress',
        ]);
    }
}
