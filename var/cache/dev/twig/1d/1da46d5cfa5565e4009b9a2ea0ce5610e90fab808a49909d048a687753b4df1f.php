<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_249942dc1bd6a1fa3960de53da2e6bf496c8faf802bdcd909d0f5790bcd286db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_52f15074e8b3461ab7679f4937811df0d5e0e1486790f293fce79526a22c5726 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52f15074e8b3461ab7679f4937811df0d5e0e1486790f293fce79526a22c5726->enter($__internal_52f15074e8b3461ab7679f4937811df0d5e0e1486790f293fce79526a22c5726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_e4f633534e2faf97169adc195d3a9bbe6971ba35913fc8a2417e09c623ecf06e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4f633534e2faf97169adc195d3a9bbe6971ba35913fc8a2417e09c623ecf06e->enter($__internal_e4f633534e2faf97169adc195d3a9bbe6971ba35913fc8a2417e09c623ecf06e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_52f15074e8b3461ab7679f4937811df0d5e0e1486790f293fce79526a22c5726->leave($__internal_52f15074e8b3461ab7679f4937811df0d5e0e1486790f293fce79526a22c5726_prof);

        
        $__internal_e4f633534e2faf97169adc195d3a9bbe6971ba35913fc8a2417e09c623ecf06e->leave($__internal_e4f633534e2faf97169adc195d3a9bbe6971ba35913fc8a2417e09c623ecf06e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
