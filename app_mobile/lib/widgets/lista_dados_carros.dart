import 'package:app_mobile/funcoes.dart';
import 'package:app_mobile/ui/detalhes_page.dart';
import 'package:app_mobile/widgets/imagem.dart';
import 'package:flutter/material.dart';

class ListaDadosCarros {
  static void cliqueItem(BuildContext context, Map dados) {
    Navigator.push(context,
      MaterialPageRoute(builder: (context) => DetalhesPage(dados)
    ));
  }

  static Widget criarItem(Map dados) {
    return Row(
      children: <Widget>[
        Imagem.criarImagemWeb(
          Funcoes.corrigeLinkImagem(dados["cars"].toString()), h: 75, w: 75
        ),
        Expanded(
          child: Padding(
            padding: EdgeInsets.symmetric(horizontal: 20),
            child: Text(dados["cars"].toString(),
              style: TextStyle(fontSize: 20, fontWeight: FontWeight.bold),),
          ),
        ),
      ],
    );
  }
}