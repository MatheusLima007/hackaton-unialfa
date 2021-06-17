import 'package:app_mobile/funcoes.dart';
import 'package:app_mobile/widgets/lista_dados_carros.dart';
import 'package:flutter/material.dart';

class ListaDados {
  static Widget criar(BuildContext context, AsyncSnapshot snapshot, int tipo) {
    return ListView.builder(
      padding: EdgeInsets.all(6),
      scrollDirection: Axis.vertical,
      itemCount: snapshot.data.length,
      itemBuilder: (context, index) {
        return GestureDetector(
          onTap: () {
            if (tipo == Funcoes.LISTA_CARROS)
              ListaDadosCarros.cliqueItem(context, snapshot.data[index]);
          },
          child: Card(
            color: Colors.white,
            child: Padding(
              padding: EdgeInsets.all(10),
              child: _retornaLista(tipo, snapshot.data[index]),
            ),
          ),
        );
      },
    );
  }

  static Widget _retornaLista(int tipo, Map dados) {
    switch (tipo) {
      case Funcoes.LISTA_CARROS:
        return ListaDadosCarros.criarItem(dados);
      case Funcoes.LISTA_CARROS:
        return Container(); //return ListaDadosPrograma.criarItem(dados);
      default:
        return Container();
    }
  }
}