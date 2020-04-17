// create the configuration object
var MTIConfig = {};

// assign the variable to enable FOUT prevention
// default value -> false (prevention disabled)
// true -> enable FOUT prevention
MTIConfig.EnableCustomFOUTHandler = true;

// assign the variable to remove `mti_font_element`
// this is only valid if FOUT prevention is enabled
// default value -> false (class is left on elements)
// true -> remove class when FOUT prevention finishes
MTIConfig.RemoveMTIClass = true;