<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_ef9edb4d226bcfc71e9b36f6448e93a90de0d6690a02db843490c8107fd778e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d40dd050af091924fb80ed6cc8665387c32e2784ecf7acc54f8b1a0431d5f25c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d40dd050af091924fb80ed6cc8665387c32e2784ecf7acc54f8b1a0431d5f25c->enter($__internal_d40dd050af091924fb80ed6cc8665387c32e2784ecf7acc54f8b1a0431d5f25c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_bf36f5df152c48d1cd4836c79197130a54563743e52f8c7d5540c41805a9943d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf36f5df152c48d1cd4836c79197130a54563743e52f8c7d5540c41805a9943d->enter($__internal_bf36f5df152c48d1cd4836c79197130a54563743e52f8c7d5540c41805a9943d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d40dd050af091924fb80ed6cc8665387c32e2784ecf7acc54f8b1a0431d5f25c->leave($__internal_d40dd050af091924fb80ed6cc8665387c32e2784ecf7acc54f8b1a0431d5f25c_prof);

        
        $__internal_bf36f5df152c48d1cd4836c79197130a54563743e52f8c7d5540c41805a9943d->leave($__internal_bf36f5df152c48d1cd4836c79197130a54563743e52f8c7d5540c41805a9943d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_39870ace0ea1e4c72ca3b608c1d943a83c797392651531c3ad3b377aef6351bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39870ace0ea1e4c72ca3b608c1d943a83c797392651531c3ad3b377aef6351bd->enter($__internal_39870ace0ea1e4c72ca3b608c1d943a83c797392651531c3ad3b377aef6351bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_3854769b7f0fa0cf2a75a71f1a3e3deda1b96c6ac457fabc4292b2ebec046be9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3854769b7f0fa0cf2a75a71f1a3e3deda1b96c6ac457fabc4292b2ebec046be9->enter($__internal_3854769b7f0fa0cf2a75a71f1a3e3deda1b96c6ac457fabc4292b2ebec046be9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_3854769b7f0fa0cf2a75a71f1a3e3deda1b96c6ac457fabc4292b2ebec046be9->leave($__internal_3854769b7f0fa0cf2a75a71f1a3e3deda1b96c6ac457fabc4292b2ebec046be9_prof);

        
        $__internal_39870ace0ea1e4c72ca3b608c1d943a83c797392651531c3ad3b377aef6351bd->leave($__internal_39870ace0ea1e4c72ca3b608c1d943a83c797392651531c3ad3b377aef6351bd_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
