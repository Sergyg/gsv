<?php

namespace App\Http\Controllers;

    use Illuminate\Support\Facades\Response;
    use Illuminate\Http\Request;
    use App\Models\Kontrahenty;
    use Yajra\DataTables\DataTables;
    class KontrahentyController extends Controller
    {
        function index()
        {
            return view('kontrahenty');
        }

        public function getdata(Request $request)
        {

            if ($request->ajax()) {
                $kontr = Kontrahenty::select('*');
                $dt =  DataTables::of($kontr);
                $dt
                    ->addIndexColumn()
                    ->addColumn('action',
                        function($row) {
                            $html = "<a href='#' id='edit' data-id='" . $row->id . "'>Redaguj</a>";
                            $html .= "&nbsp;&nbsp;<a href='#' id='delete' data-id='" . $row->id . "'>Usun</a>";
                            return $html;
                    })
//                    ->filter
                    ->editColumn('nip', function ($row){
                        return  number_format($row->nip, 0, '','');
                    })
                    ->editColumn('reg', function ($row){
                        return number_format($row->reg,0, '','');
                    })
                    ->editColumn('nazwa', function ($row){
                        return "<b>" . $row->nazwa . "</b>";
                    })
                    ->editColumn('czyvat', function ($row){
                        return "<b>" . $row->czyvat . "</b>";
                    })
                    ->editColumn('ulica', function ($row){
                        return '<b>' . $row->ulica . '</b>';
                    })
                    ->editColumn('numdom', function ($row){
                        return number_format($row->numdom,0, '','');
                    })
                    ->editColumn('nummeszk', function ($row){
                        return number_format($row->nummeszk,0, '','');
                    })
                    ->rawColumns(['nip', 'reg', 'nazwa', 'czyvat', 'ulica', 'numdom', 'nummeszk', 'actions']);
            }
                    return $dt->escapeColumns([])->make( true );
        }


        function postdata(Request $request)
        {

                if (empty($request['pid'])) {
                    $kontrahent = new Kontrahenty();
                    $kontrahent->nip = $request['nip'];
                    $kontrahent->reg = $request['reg'];
                    $kontrahent->nazwa = $request['nazwa'];
                    $kontrahent->czyvat = $request['czyvat'];
                    $kontrahent->ulica = $request['ulica'];
                    $kontrahent->numdom = $request['numdom'];
                    $kontrahent->nummeszk = $request['nummeszk'];
                    $kontrahent->save();
                } else {
                    $kontrahent = Kontrahenty::find($request['pid']);
                    $kontrahent->nip = $request['nip'];
                    $kontrahent->reg = $request['reg'];
                    $kontrahent->nazwa = $request['nazwa'];
                    $kontrahent->czyvat = $request['czyvat'];
                    $kontrahent->ulica = $request['ulica'];
                    $kontrahent->numdom = $request['numdom'];
                    $kontrahent->nummeszk = $request['nummeszk'];
                    $kontrahent->save();
                }
                return Response::json(array('data' => $kontrahent));
            }
//        }
    public function gettData(Request $request)
    {
    $kontrahent = Kontrahenty::find($request->id);
    return Response::json(array('data'=>$kontrahent));
    }

    public function destroy(Request $request)
    {
        Kontrahenty::find($request->id)->delete();
        return response()->json();
    }
        public function behaviors()
        {
            return [
                'softDeleteBehavior' => [
                    'class' => SoftDeleteBehavior::className(),
                    'softDeleteAttributeValues' => [
                        'isDeleted' => true
                    ],
                    'replaceRegularDelete' => true // mutate native `delete()` method
                ],
            ];
        }
}


