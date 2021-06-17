import 'package:flutter/material.dart';

class CampoTexto {

  static Widget criar(String texto, String prefixo, TextEditingController controller, TextInputType teclado) {
    return Container(
      padding: EdgeInsets.symmetric(vertical: 12, horizontal: 20),
      child: TextField(
        controller: controller,
        decoration: InputDecoration(
          border: OutlineInputBorder(),
          labelText: texto,
          labelStyle: TextStyle(fontSize: 25),
          prefixText: prefixo,
          prefixStyle: TextStyle(fontSize: 25),
        ),
        style: TextStyle(fontSize: 25),
        keyboardType: teclado,
      ),
    );
  }

}