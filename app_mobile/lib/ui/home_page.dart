import 'package:app_mobile/funcoes.dart';
import 'package:app_mobile/widgets/barra_titulo.dart';
import 'package:app_mobile/widgets/circulo_aguarde.dart';
import 'package:app_mobile/widgets/lista_dados.dart';
import 'package:flutter/material.dart';

class HomePage extends StatefulWidget {
  @override
  _HomePageState createState() => _HomePageState();
}

class _HomePageState extends State<HomePage> {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: BarraTitulo.criar("Carros"),
      backgroundColor: Colors.grey[100],
      body: Column(
        children: <Widget>[
          Expanded(
            child: FutureBuilder(
              future: Funcoes.getListaJson("http://localhost:3000/cars"),
              builder: (context, snapshot) {
                switch (snapshot.connectionState) {
                  case ConnectionState.waiting:
                  case ConnectionState.none:
                    return CirculoAguarde.criar();
                  default:
                    if (snapshot.hasError)
                      return Text("ERRO!!!! ");
                    else
                      return ListaDados.criar(
                          context, snapshot, Funcoes.LISTA_CARROS
                      );
                }
              },
            ),
          ),
        ],
      ),
    );
  }
}