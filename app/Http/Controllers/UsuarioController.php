<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\ToukeUser;
use Carbon\Carbon;

class UsuarioController extends Controller
{
    public function perfil()
    {
       

        return view('perfil');

    }

    // Esta função é para a API (retorna JSON)
    public function busca_usuario(Request $request)
    {
        // O middleware já anexou o usuário no $request
        // Por causa do middleware auth_api, temos $request->usuario
        
        if($request->usuario) {
            return response()->json([
                "erro" => "n",
                "usuario" => [
                    'id' => $request->usuario->id,
                    'nome' => $request->usuario->nome,
                    'email' => $request->usuario->email,
                    'telefone' => $request->usuario->telefone,
                    'nascimento' => $request->usuario->nascimento,
                    'genero' => $request->usuario->genero,
                    'created_at' => $request->usuario->created_at
                ]
            ], 200);
        } else {
            return response()->json([
                "erro" => "s",
                "msg" => "Usuário não encontrado"
            ], 404);
        }
    }








    public function Cadastra_Usuario(Request $request){
        
        $request->validate([
            'nome'=>'required',
            'email'=>'required',
            'senha'=>'required',
            'telefone'=>'required', 
            'nascimento'=>'required',
            'genero'=>'required',
        ]);
        try {
            $usuario = new Usuario();
            $usuario->email = $request->email;
            $usuario->nome = $request->nome;
            $usuario->telefone = $request->telefone;
            $usuario-> nascimento = $request->nascimento;
            $usuario->genero = $request->genero;
           $usuario->senha = md5($request->senha);
           $usuario->save();

           $data =[
                'erro' => 'n',
                'data' => $usuario
           ];
           return response()->json($data, 200);

        } catch (\Throwable $th) {
             $data =[
                'erro' => 's',
                'data' => 'Erro ao Cadastrar Usuario'
           ];
           return response()->json($data, 200);
        }
        
    }
    public function login(request $request){
        $request->validate([
        'email' => 'required',
        'senha' => 'required',
        ]);

        $usuario = Usuario::where('email','=', $request->email)
        ->where('senha','=',md5($request->senha))->get()->first();
        
        if ($usuario) {
            ToukeUser::where('user_id', $usuario->id)->delete();
            $token =new ToukeUser();
            $token->user_id = $usuario->id;
            $data = date(format:"y-m-d H:i:s");
            $token->token = md5($request->user_id . $usuario->email . $data);
            $agora = Carbon::now();
            $agora->addDays(7);
            $token->valido_ate = $agora;
            $token->save();

        $data = [
            'erro' => 'n',
            'msg' => 'Usuario Logado',
            'token' => $token->token
        ];
        return response()->json($data, 200);
        }else{
         $data = [
            'erro' => 's',
            'msg' => 'não achei o usuario',
            
        ];
        return response()->json($data, 200);
        }
    }

    public function mostra_perfil($id_usuario){

    }

}
