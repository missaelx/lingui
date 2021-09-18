<?php

namespace Database\Seeders;

use App\Models\Verb;
use Illuminate\Database\Seeder;

class VerbSeeder extends Seeder
{
    function getVerbs() {
        return [
            [ "infinite" => "accept", "preterite" => "accepted", "past_participle" => "accepted", "translation" => "aceptar, admitir, reconocer"],
            [ "infinite" => "allow", "preterite" => "allowed", "past_participle" => "allowed", "translation" => "permitir, dejar"],
            [ "infinite" => "ask", "preterite" => "asked", "past_participle" => "asked", "translation" => "preguntar, pedir un favor u opinión"],
            [ "infinite" => "begin", "preterite" => "began", "past_participle" => "begun", "translation" => "empezar"],
            [ "infinite" => "believe", "preterite" => "believed", "past_participle" => "believed", "translation" => "creer"],
            [ "infinite" => "borrow", "preterite" => "borrowed", "past_participle" => "borrowed", "translation" => "pedir prestado"],
            [ "infinite" => "break", "preterite" => "broke", "past_participle" => "broken", "translation" => "romper, destrozar, arruinar, acabar con"],
            [ "infinite" => "bring", "preterite" => "brought", "past_participle" => "brought", "translation" => "traer"],
            [ "infinite" => "buy", "preterite" => "bought", "past_participle" => "bought", "translation" => "comprar"],
            [ "infinite" => "can/be able to", "preterite" => "was able", "past_participle" => "have been able", "translation" => "poder, ser capaz de"],
            [ "infinite" => "cancel", "preterite" => "cancelled", "past_participle" => "cancelled", "translation" => "cancelar, suspender"],
            [ "infinite" => "change", "preterite" => "changed", "past_participle" => "changed", "translation" => "cambiar"],
            [ "infinite" => "clean", "preterite" => "cleaned", "past_participle" => "cleaned", "translation" => "limpiar"],
            [ "infinite" => "close", "preterite" => "closed", "past_participle" => "closed", "translation" => "cerrar; concluir, terminar"],
            [ "infinite" => "comb", "preterite" => "combed", "past_participle" => "combed", "translation" => "peinar(se)"],
            [ "infinite" => "complain", "preterite" => "complained", "past_participle" => "complained", "translation" => "quejarse"],
            [ "infinite" => "cough", "preterite" => "coughed", "past_participle" => "coughed", "translation" => "toser"],
            [ "infinite" => "count", "preterite" => "counted", "past_participle" => "counted", "translation" => "contar, tener importancia"],
            [ "infinite" => "cut", "preterite" => "cut", "past_participle" => "cut", "translation" => "cortar"],
            [ "infinite" => "dance", "preterite" => "danced", "past_participle" => "danced", "translation" => "bailar"],
            [ "infinite" => "do", "preterite" => "did", "past_participle" => "done", "translation" => "hacer"],
            [ "infinite" => "draw", "preterite" => "drew", "past_participle" => "drawn", "translation" => "dibujar, trazar; correr/descorrer/bajar las cortinas y persianas; sacar dinero del banco"],
            [ "infinite" => "drink", "preterite" => "drank", "past_participle" => "drunk", "translation" => "beber"],
            [ "infinite" => "drive", "preterite" => "drove", "past_participle" => "driven", "translation" => "conducir; llevar"],
            [ "infinite" => "eat", "preterite" => "ate", "past_participle" => "eaten", "translation" => "comer"],
            [ "infinite" => "explain", "preterite" => "explained", "past_participle" => "explained", "translation" => "explicar"],
            [ "infinite" => "fall", "preterite" => "fell", "past_participle" => "fallen", "translation" => "caer(se)"],
            [ "infinite" => "fill", "preterite" => "filled", "past_participle" => "filled", "translation" => "llenar"],
            [ "infinite" => "find", "preterite" => "found", "past_participle" => "found", "translation" => "encontrar, hallar, descubrir"],
            [ "infinite" => "finish", "preterite" => "finished", "past_participle" => "finished", "translation" => "terminar, acabar"],
            [ "infinite" => "fit", "preterite" => "fitted", "past_participle" => "fitted", "translation" => "caber, encajar"],
            [ "infinite" => "fix", "preterite" => "fixed", "past_participle" => "fixed", "translation" => "reparar, arreglar; fijar, sujetar"],
            [ "infinite" => "fly", "preterite" => "flew", "past_participle" => "flown", "translation" => "volar"],
            [ "infinite" => "forget", "preterite" => "forgot", "past_participle" => "forgotten", "translation" => "olvidar(se)"],
            [ "infinite" => "give", "preterite" => "gave", "past_participle" => "given", "translation" => "dar, regalar, donar"],
            [ "infinite" => "go", "preterite" => "went", "past_participle" => "gone", "translation" => "ir(se), salir"],
            [ "infinite" => "have", "preterite" => "had", "past_participle" => "had", "translation" => "tener, poseer"],
            [ "infinite" => "hear", "preterite" => "heard", "past_participle" => "heard", "translation" => "oír"],
            [ "infinite" => "hurt", "preterite" => "hurt", "past_participle" => "hurt", "translation" => "herir, dañar, lastimar, ofender"],
            [ "infinite" => "know", "preterite" => "knew", "past_participle" => "known", "translation" => "saber, conocer"],
            [ "infinite" => "learn", "preterite" => "learned/learnt", "past_participle" => "learned/learnt", "translation" => "aprender, enterarse"],
            [ "infinite" => "leave", "preterite" => "left", "past_participle" => "left", "translation" => "salir, marcharse, irse; dejar, abandonar"],
            [ "infinite" => "listen", "preterite" => "listened", "past_participle" => "listened", "translation" => "escuchar, prestar atención"],
            [ "infinite" => "live", "preterite" => "lived", "past_participle" => "lived", "translation" => "vivir, residir"],
            [ "infinite" => "look", "preterite" => "looked", "past_participle" => "looked", "translation" => "mirar, aparentar"],
            [ "infinite" => "lose", "preterite" => "lost", "past_participle" => "lost", "translation" => "perder"],
            [ "infinite" => "make", "preterite" => "made", "past_participle" => "made", "translation" => "hacer, preparar, fabricar, confeccionar"],
            [ "infinite" => "need", "preterite" => "needed", "past_participle" => "needed", "translation" => "necesitar, tener que"],
            [ "infinite" => "open", "preterite" => "opened", "past_participle" => "opened", "translation" => "abrir; iniciar, inaugurar"],
            [ "infinite" => "organize", "preterite" => "organized", "past_participle" => "organized", "translation" => "organizar"],
            [ "infinite" => "pay", "preterite" => "paid", "past_participle" => "paid", "translation" => "pagar"],
            [ "infinite" => "play", "preterite" => "played", "past_participle" => "played", "translation" => "jugar"],
            [ "infinite" => "put", "preterite" => "put", "past_participle" => "put", "translation" => "poner, colocar, instalar"],
            [ "infinite" => "rain", "preterite" => "rained", "past_participle" => "rained", "translation" => "llover"],
            [ "infinite" => "read", "preterite" => "read", "past_participle" => "read", "translation" => "leer"],
            [ "infinite" => "reply", "preterite" => "replied", "past_participle" => "replied", "translation" => "responder"],
            [ "infinite" => "run", "preterite" => "ran", "past_participle" => "run", "translation" => "correr"],
            [ "infinite" => "say", "preterite" => "said", "past_participle" => "said", "translation" => "decir"],
            [ "infinite" => "see", "preterite" => "saw", "past_participle" => "seen", "translation" => "ver"],
            [ "infinite" => "sell", "preterite" => "sold", "past_participle" => "sold", "translation" => "vender"],
            [ "infinite" => "send", "preterite" => "sent", "past_participle" => "sent", "translation" => "enviar"],
            [ "infinite" => "shut", "preterite" => "shut", "past_participle" => "shut", "translation" => "cerrar, apagar, acabar"],
            [ "infinite" => "sign", "preterite" => "signed", "past_participle" => "signed", "translation" => "firmar"],
            [ "infinite" => "sing", "preterite" => "sang", "past_participle" => "sung", "translation" => "cantar"],
            [ "infinite" => "sit", "preterite" => "sat", "past_participle" => "sat", "translation" => "sentar(se); colocar"],
            [ "infinite" => "sleep", "preterite" => "slept", "past_participle" => "slept", "translation" => "dormir"],
            [ "infinite" => "smoke", "preterite" => "smoked", "past_participle" => "smoked", "translation" => "fumar"],
            [ "infinite" => "speak", "preterite" => "spoke", "past_participle" => "spoken", "translation" => "hablar"],
            [ "infinite" => "spell", "preterite" => "spelled/spelt", "past_participle" => "spelled/spelt", "translation" => "deletrear"],
            [ "infinite" => "spend", "preterite" => "spent", "past_participle" => "spent", "translation" => "gastar; pasar el tiempo"],
            [ "infinite" => "stand", "preterite" => "stood", "past_participle" => "stood", "translation" => "poner(se) de pie"],
            [ "infinite" => "start", "preterite" => "started", "past_participle" => "started", "translation" => "comenzar, empezar"],
            [ "infinite" => "study", "preterite" => "studied", "past_participle" => "studied", "translation" => "estudiar; examinar, investigar"],
            [ "infinite" => "succeed", "preterite" => "succeeded", "past_participle" => "succeeded", "translation" => "tener éxito, triunfar"],
            [ "infinite" => "swim", "preterite" => "swam", "past_participle" => "swum", "translation" => "nadar"],
            [ "infinite" => "take", "preterite" => "took", "past_participle" => "taken", "translation" => "tomar, coger, agarrar; llevar, robar"],
            [ "infinite" => "talk", "preterite" => "talked", "past_participle" => "talked", "translation" => "hablar"],
            [ "infinite" => "teach", "preterite" => "taught", "past_participle" => "taught", "translation" => "enseñar"],
            [ "infinite" => "tell", "preterite" => "told", "past_participle" => "told", "translation" => "decir, informar, contar"],
            [ "infinite" => "think", "preterite" => "thought", "past_participle" => "thought", "translation" => "pensar, creer"],
            [ "infinite" => "translate", "preterite" => "translated", "past_participle" => "translated", "translation" => "traducir"],
            [ "infinite" => "travel", "preterite" => "travelled/traveled", "past_participle" => "travelled/traveled", "translation" => "viajar"],
            [ "infinite" => "try", "preterite" => "tried", "past_participle" => "tried", "translation" => "intentar"],
            [ "infinite" => "turn off", "preterite" => "turned off", "past_participle" => "turned off", "translation" => "apagar, cerrar"],
            [ "infinite" => "turn on", "preterite" => "turned on", "past_participle" => "turned on", "translation" => "encender, abrir"],
            [ "infinite" => "type", "preterite" => "typed", "past_participle" => "typed", "translation" => "escribir a máquina, teclear"],
            [ "infinite" => "understand", "preterite" => "understood", "past_participle" => "understood", "translation" => "entender, comprender"],
            [ "infinite" => "use", "preterite" => "used", "past_participle" => "used", "translation" => "usar, utilizar, emplear"],
            [ "infinite" => "wait", "preterite" => "waited", "past_participle" => "waited", "translation" => "esperar"],
            [ "infinite" => "wake up", "preterite" => "woke/waked", "past_participle" => "woken/waked", "translation" => "despertar(se)"],
            [ "infinite" => "want", "preterite" => "wanted", "past_participle" => "wanted", "translation" => "querer, desear"],
            [ "infinite" => "watch", "preterite" => "watched", "past_participle" => "watched", "translation" => "observar, vigilar; tener cuidado con"],
            [ "infinite" => "work", "preterite" => "worked", "past_participle" => "worked", "translation" => "trabajar"],
            [ "infinite" => "worry", "preterite" => "worried", "past_participle" => "worried", "translation" => "preocupar(se), inquietar"],
            [ "infinite" => "write", "preterite" => "wrote", "past_participle" => "written", "translation" => "escribir"],
            [ "infinite" => "trust", "preterite" => "trusted", "past_participle" => "trusted", "translation" => "confiar"],
        ];
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->getVerbs() as $verb){
            $v = new Verb();
            $v->infinite = $verb["infinite"];
            $v->preterite = $verb["preterite"];
            $v->past_participle = $verb["past_participle"];
            $v->translation = $verb["translation"];
            $v->save();
        }
    }
}
