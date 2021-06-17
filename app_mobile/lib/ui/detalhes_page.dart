import 'package:app_mobile/funcoes.dart';
import 'package:app_mobile/widgets/barra_titulo.dart';
import 'package:app_mobile/widgets/imagem.dart';
import 'package:flutter/cupertino.dart';
import 'package:flutter/material.dart';

class DetalhesPage extends StatelessWidget {
  final Map dadosCarros;

  DetalhesPage(this.dadosCarros);

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: BarraTitulo.criar(dadosCarros["id, cars, user_id, color_id, brand_id, model, model_year, fabrication, price, type, image"]),
      body: Column(
        crossAxisAlignment: CrossAxisAlignment.stretch,
        children: <Widget>[
          Imagem.criarImagemWeb(
            Funcoes.corrigeLinkImagem(dadosCarros["imagem"].toString()),
          ),
          Text("Veículo: " + dadosCarros["cars"].toString()),
        ],
      ),
    );
  }
}