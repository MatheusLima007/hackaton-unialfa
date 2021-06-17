import 'dart:convert';
import 'package:http/http.dart' as http;
import 'package:flutter/material.dart';

class Funcoes {
  static const LISTA_CARROS = 1;

  static Widget _criarIconeEspacado(IconData icone, Color cor, double tamanho) {
    return Padding(
      padding: EdgeInsets.all(4),
      child: Icon(icone, color: cor, size: tamanho,),
    );
  }

  static Widget criarIcone(IconData icone, {Color cor, double tamanho}) {
    return icone != null ? _criarIconeEspacado(icone, cor, tamanho) : Container();
  }

  void mostrarMensagem(BuildContext context, String tituloMensagem, String corpoMensagem) {
    showDialog(
        context: context,
        builder: (context) {
          return AlertDialog(
            title: Text(tituloMensagem),
            content: Text(corpoMensagem),
            actions: [
              FlatButton(
                child: Text("OK"),
                onPressed: () { _fecharTelaAtual(context); },
              ),
            ],
          );
        }
    );
  }

  void _fecharTelaAtual(BuildContext context) {
    Navigator.pop(context);
  }

  static String corrigeLinkImagem(String link) {
    return link.replaceAll("~/", "http://localhost:3000/cars");
  }

  static Future<List<dynamic>> getListaJson(String link) async {
    Uri uri = Uri.parse(link);
    http.Response response = await http.get(uri);
    return json.decode(response.body);
  }
}