<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_0407d5f2dbe15f52dc2a268045508202bec27dad657e8d8ad357a809b0cb6f3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_85c00e3930771cda3fd8657255bfec4f7146da9ed6230cdc2edc56322213028d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85c00e3930771cda3fd8657255bfec4f7146da9ed6230cdc2edc56322213028d->enter($__internal_85c00e3930771cda3fd8657255bfec4f7146da9ed6230cdc2edc56322213028d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_619fe14c3bec68d1b4f7021c089308933fa96f3bbe508d507a4c894ac3d16606 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_619fe14c3bec68d1b4f7021c089308933fa96f3bbe508d507a4c894ac3d16606->enter($__internal_619fe14c3bec68d1b4f7021c089308933fa96f3bbe508d507a4c894ac3d16606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85c00e3930771cda3fd8657255bfec4f7146da9ed6230cdc2edc56322213028d->leave($__internal_85c00e3930771cda3fd8657255bfec4f7146da9ed6230cdc2edc56322213028d_prof);

        
        $__internal_619fe14c3bec68d1b4f7021c089308933fa96f3bbe508d507a4c894ac3d16606->leave($__internal_619fe14c3bec68d1b4f7021c089308933fa96f3bbe508d507a4c894ac3d16606_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4d1d58f55a89704bfe6bd0129f14f6dec2c104e1497b173e0780589151969b33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d1d58f55a89704bfe6bd0129f14f6dec2c104e1497b173e0780589151969b33->enter($__internal_4d1d58f55a89704bfe6bd0129f14f6dec2c104e1497b173e0780589151969b33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b8cbb704e08ede00bf0ddbda71767d27b8e82314ab83b4573e290a3e5272253c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8cbb704e08ede00bf0ddbda71767d27b8e82314ab83b4573e290a3e5272253c->enter($__internal_b8cbb704e08ede00bf0ddbda71767d27b8e82314ab83b4573e290a3e5272253c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_b8cbb704e08ede00bf0ddbda71767d27b8e82314ab83b4573e290a3e5272253c->leave($__internal_b8cbb704e08ede00bf0ddbda71767d27b8e82314ab83b4573e290a3e5272253c_prof);

        
        $__internal_4d1d58f55a89704bfe6bd0129f14f6dec2c104e1497b173e0780589151969b33->leave($__internal_4d1d58f55a89704bfe6bd0129f14f6dec2c104e1497b173e0780589151969b33_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_899107196312e6d9df6509c65f4b6381e8dac51a10fda71b780aeb4df13206ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_899107196312e6d9df6509c65f4b6381e8dac51a10fda71b780aeb4df13206ad->enter($__internal_899107196312e6d9df6509c65f4b6381e8dac51a10fda71b780aeb4df13206ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_18e23d16cd185ab88404cffa545492d84eefb761cdff2226b0eef5c42db0f08b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18e23d16cd185ab88404cffa545492d84eefb761cdff2226b0eef5c42db0f08b->enter($__internal_18e23d16cd185ab88404cffa545492d84eefb761cdff2226b0eef5c42db0f08b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_18e23d16cd185ab88404cffa545492d84eefb761cdff2226b0eef5c42db0f08b->leave($__internal_18e23d16cd185ab88404cffa545492d84eefb761cdff2226b0eef5c42db0f08b_prof);

        
        $__internal_899107196312e6d9df6509c65f4b6381e8dac51a10fda71b780aeb4df13206ad->leave($__internal_899107196312e6d9df6509c65f4b6381e8dac51a10fda71b780aeb4df13206ad_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b5a57f91666710b343fe68fba76c05b32712da8315f35d0db108b053ad6b36ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5a57f91666710b343fe68fba76c05b32712da8315f35d0db108b053ad6b36ad->enter($__internal_b5a57f91666710b343fe68fba76c05b32712da8315f35d0db108b053ad6b36ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7ff554a30cc4bb09fce76545eafad8c1bf278ce89fed48f63c735dc7201791db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ff554a30cc4bb09fce76545eafad8c1bf278ce89fed48f63c735dc7201791db->enter($__internal_7ff554a30cc4bb09fce76545eafad8c1bf278ce89fed48f63c735dc7201791db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_7ff554a30cc4bb09fce76545eafad8c1bf278ce89fed48f63c735dc7201791db->leave($__internal_7ff554a30cc4bb09fce76545eafad8c1bf278ce89fed48f63c735dc7201791db_prof);

        
        $__internal_b5a57f91666710b343fe68fba76c05b32712da8315f35d0db108b053ad6b36ad->leave($__internal_b5a57f91666710b343fe68fba76c05b32712da8315f35d0db108b053ad6b36ad_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
