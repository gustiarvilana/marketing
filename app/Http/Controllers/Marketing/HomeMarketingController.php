<?php

namespace App\Http\Controllers\Marketing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeMarketingController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Dummy data for sales, products, and types
        $saless = [
            ['id' => 1, 'name' => 'Sale 1'],
            ['id' => 2, 'name' => 'Sale 2'],
            ['id' => 3, 'name' => 'Sale 3'],
        ];

        $produks = [
            ['id' => 101, 'name' => 'Product 1', 'price' => 150],
            ['id' => 102, 'name' => 'Product 2', 'price' => 250],
            ['id' => 103, 'name' => 'Product 3', 'price' => 350],
        ];

        $types = [
            ['id' => 1, 'name' => 'Tunai'],
            ['id' => 2, 'name' => 'Credit'],

        ];

        // Passing the dummy data to the view
        $data = [
            'saless' => $saless,
            'produks' => $produks,
            'types' => $types,
        ];

        return view('marketing.home', $data);
    }


    public function data()
    {
        // Ambil data dari database atau sumber lainnya
        $projects = [
            [
                'title' => 'New Application Design',
                'last_edited_by' => 'Savanah Durgan',
                'start_date' => 'Jan 26, 2020',
                'start_time' => '6:30 PM',
                'tasks_completed' => '75/100',
                'tasks_completed_percentage' => 75,
                'priority' => 'Low',
                'team' => [
                    ['avatar' => url('assets/assets/images/xs/avatar1.jpg')],
                    ['avatar' => url('assets/assets/images/xs/avatar2.jpg')],
                    ['avatar' => url('assets/assets/images/xs/avatar3.jpg')],
                    ['avatar' => url('assets/assets/images/xs/avatar4.jpg')],
                    ['avatar' => url('assets/assets/images/xs/avatar5.jpg')]
                ]
            ],
        ];

        // Data untuk Wrok Report (Area Chart)
        $workReport = [
            'task_data' => [31, 40, 28, 51, 42, 109, 100],
            'completed_task_data' => [11, 32, 45, 32, 34, 52, 41],
            'active_task_data' => [50, 45, 12, 78, 23, 81, 29],
            'categories' => [
                "2021-01-1 GMT",
                "2021-02-1 GMT",
                "2021-03-1 GMT",
                "2021-04-1 GMT",
                "2021-05-1 GMT",
                "2021-06-1 GMT",
                "2021-07-1 GMT",
            ],
        ];

        // Data untuk Sessions by Device (Donut Chart)
        $sessionsByDevice = [
            'series' => [86, 44],
            'labels' => ['Male 86', 'Female 44'],
        ];

        // Data untuk Total Projects (Bar Chart)
        $totalProjects = [
            'upcoming' => [4, 8, 2, 3, 12, 10, 8, 12, 11, 5, 8, 4],
            'in_progress' => [
                18,
                22,
                20,
                8,
                13,
                27,
                18,
                18,
                20,
                12,
                14,
                18
            ],
            'completed' => [40, 35, 25, 28, 44, 53, 18, 29, 21, 19, 39, 51],
            'categories' => [
                "01/30/2021 GMT",
                "02/27/2021 GMT",
                "03/30/2021 GMT",
                "04/30/2021 GMT",
                "05/30/2021 GMT",
                "06/30/2021 GMT",
                "07/30/2021 GMT",
                "08/30/2021 GMT",
                "09/30/2021 GMT",
                "10/30/2021 GMT",
                "11/30/2021 GMT",
                "12/30/2021 GMT",
            ],
        ];

        return response()->json([
            'data'               => $projects,
            'work_report'        => $workReport,
            'sessions_by_device' => $sessionsByDevice,
            'total_projects'     => $totalProjects,
        ]);
    }

    // YourController.php

    public function addSession(Request $request)
    {
        // Validasi data yang diterima jika diperlukan
        $validatedData = $request->validate([
            'data' => 'required|array',
        ]);

        // Menyimpan session dalam bentuk array
        session()->put($request->data);  // Menyimpan data session yang dikirim dalam bentuk array

        return response()->json(['success' => true]);
    }
}
