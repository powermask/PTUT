<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_f1155fae3f7ce79e8d63ceb17cf70bc06c1a4e82455a76235e918e1472cb0499 extends Twig_Template
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
        $__internal_e4a418027bc11066c5b5092d0a20d38ee1f1135a3cd62efc0af6c2e73deb6907 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4a418027bc11066c5b5092d0a20d38ee1f1135a3cd62efc0af6c2e73deb6907->enter($__internal_e4a418027bc11066c5b5092d0a20d38ee1f1135a3cd62efc0af6c2e73deb6907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_236ae3b17aaa1d05423843755c7592552a7c42f7af969a75880986b3b60baef6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_236ae3b17aaa1d05423843755c7592552a7c42f7af969a75880986b3b60baef6->enter($__internal_236ae3b17aaa1d05423843755c7592552a7c42f7af969a75880986b3b60baef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_e4a418027bc11066c5b5092d0a20d38ee1f1135a3cd62efc0af6c2e73deb6907->leave($__internal_e4a418027bc11066c5b5092d0a20d38ee1f1135a3cd62efc0af6c2e73deb6907_prof);

        
        $__internal_236ae3b17aaa1d05423843755c7592552a7c42f7af969a75880986b3b60baef6->leave($__internal_236ae3b17aaa1d05423843755c7592552a7c42f7af969a75880986b3b60baef6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.css.twig", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
