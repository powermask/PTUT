<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_e7540d81a0e2a51f719f2be6c96bcbe60caad8cc1a0ee074d0b04f979bd7d8cb extends Twig_Template
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
        $__internal_9f8a194f310de703e1e55d8ee03fb331b449d3168115e5ea480b053dc22b2fba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f8a194f310de703e1e55d8ee03fb331b449d3168115e5ea480b053dc22b2fba->enter($__internal_9f8a194f310de703e1e55d8ee03fb331b449d3168115e5ea480b053dc22b2fba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_d1cbc13d298279696b735698fd7785e0a4e1123561324f2cf8c6c0e7b4adb16b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1cbc13d298279696b735698fd7785e0a4e1123561324f2cf8c6c0e7b4adb16b->enter($__internal_d1cbc13d298279696b735698fd7785e0a4e1123561324f2cf8c6c0e7b4adb16b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_9f8a194f310de703e1e55d8ee03fb331b449d3168115e5ea480b053dc22b2fba->leave($__internal_9f8a194f310de703e1e55d8ee03fb331b449d3168115e5ea480b053dc22b2fba_prof);

        
        $__internal_d1cbc13d298279696b735698fd7785e0a4e1123561324f2cf8c6c0e7b4adb16b->leave($__internal_d1cbc13d298279696b735698fd7785e0a4e1123561324f2cf8c6c0e7b4adb16b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.rdf.twig", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
