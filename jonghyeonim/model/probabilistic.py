# -*- coding: utf-8 -*-

# Form implementation generated from reading ui file 'probabilistic.ui'
#
# Created by: PyQt4 UI code generator 4.11.4
#
# WARNING! All changes made in this file will be lost!

import sip
import sys
import math
from PyQt4 import QtGui, QtCore, QtGui

class Probabilistic(QtGui.QWidget):
    def __init__(self):
        super(Probabilistic, self).__init__()

        self.setupUi()
        self.show()

    def setupUi(self):
        #self.setObjectName("Form")
        font = QtGui.QFont()
        font.setPointSize(25)

        self.resize(878, 544)
        self.label_Model = QtGui.QLabel(self)
        self.label_Model.setGeometry(QtCore.QRect(20, 10, 211, 31))
        self.label_Model.setObjectName("label_Model")
        self.label_Model.setFont(font)
        self.groupModel = QtGui.QGroupBox(self)
        self.groupModel.setGeometry(QtCore.QRect(20, 50, 151, 71))
        self.groupModel.setObjectName("groupModel")
        self.rb_EOI = QtGui.QRadioButton(self.groupModel)
        self.rb_EOI.setGeometry(QtCore.QRect(20, 30, 51, 16))
        self.rb_EOI.setObjectName("rb_EOI")
        self.rb_EOQ = QtGui.QRadioButton(self.groupModel)
        self.rb_EOQ.setGeometry(QtCore.QRect(90, 30, 51, 16))
        self.rb_EOQ.setObjectName("rb_EOQ")
        self.groupInput = QtGui.QGroupBox(self)
        self.groupInput.setGeometry(QtCore.QRect(20, 140, 561, 221))
        self.groupInput.setObjectName("groupInput")
        self.label_2 = QtGui.QLabel(self.groupInput)
        self.label_2.setGeometry(QtCore.QRect(20, 32, 91, 16))
        self.label_2.setObjectName("label_2")
        self.label_3 = QtGui.QLabel(self.groupInput)
        self.label_3.setGeometry(QtCore.QRect(20, 62, 141, 16))
        self.label_3.setObjectName("label_3")
        self.label_4 = QtGui.QLabel(self.groupInput)
        self.label_4.setGeometry(QtCore.QRect(20, 92, 141, 16))
        self.label_4.setObjectName("label_4")
        self.label_5 = QtGui.QLabel(self.groupInput)
        self.label_5.setGeometry(QtCore.QRect(20, 122, 141, 16))
        self.label_5.setObjectName("label_5")
        self.label_6 = QtGui.QLabel(self.groupInput)
        self.label_6.setGeometry(QtCore.QRect(20, 152, 141, 16))
        self.label_6.setObjectName("label_6")
        self.label_8 = QtGui.QLabel(self.groupInput)
        self.label_8.setGeometry(QtCore.QRect(400, 30, 141, 16))
        self.label_8.setObjectName("label_8")
        self.label_9 = QtGui.QLabel(self.groupInput)
        self.label_9.setGeometry(QtCore.QRect(400, 63, 141, 16))
        self.label_9.setObjectName("label_9")
        self.label_10 = QtGui.QLabel(self.groupInput)
        self.label_10.setGeometry(QtCore.QRect(400, 94, 141, 16))
        self.label_10.setObjectName("label_10")
        self.label_11 = QtGui.QLabel(self.groupInput)
        self.label_11.setGeometry(QtCore.QRect(400, 123, 141, 16))
        self.label_11.setObjectName("label_11")
        self.label_12 = QtGui.QLabel(self.groupInput)
        self.label_12.setGeometry(QtCore.QRect(400, 153, 141, 16))
        self.label_12.setObjectName("label_12")
        self.edit_C = QtGui.QLineEdit(self.groupInput)
        self.edit_C.setGeometry(QtCore.QRect(130, 30, 261, 21))
        self.edit_C.setObjectName("edit_C")
        self.edit_H = QtGui.QLineEdit(self.groupInput)
        self.edit_H.setGeometry(QtCore.QRect(130, 60, 261, 21))
        self.edit_H.setObjectName("edit_H")
        self.edit_A = QtGui.QLineEdit(self.groupInput)
        self.edit_A.setGeometry(QtCore.QRect(130, 90, 261, 21))
        self.edit_A.setObjectName("edit_A")
        self.edit_L = QtGui.QLineEdit(self.groupInput)
        self.edit_L.setGeometry(QtCore.QRect(130, 120, 261, 21))
        self.edit_L.setObjectName("edit_L")
        self.edit_D = QtGui.QLineEdit(self.groupInput)
        self.edit_D.setGeometry(QtCore.QRect(130, 150, 261, 21))
        self.edit_D.setObjectName("edit_D")
        self.edit_C_2 = QtGui.QLineEdit(self.groupInput)
        self.edit_C_2.setGeometry(QtCore.QRect(50, 190, 81, 21))
        self.edit_C_2.setObjectName("edit_C_2")
        self.edit_C_3 = QtGui.QLineEdit(self.groupInput)
        self.edit_C_3.setGeometry(QtCore.QRect(180, 190, 81, 21))
        self.edit_C_3.setObjectName("edit_C_3")
        self.edit_C_4 = QtGui.QLineEdit(self.groupInput)
        self.edit_C_4.setGeometry(QtCore.QRect(310, 190, 81, 21))
        self.edit_C_4.setObjectName("edit_C_4")
        self.edit_C_5 = QtGui.QLineEdit(self.groupInput)
        self.edit_C_5.setGeometry(QtCore.QRect(440, 190, 81, 21))
        self.edit_C_5.setObjectName("edit_C_5")
        self.groupShortage = QtGui.QGroupBox(self)
        self.groupShortage.setGeometry(QtCore.QRect(180, 50, 181, 71))
        self.groupShortage.setObjectName("groupShortage")
        self.rb_allowed = QtGui.QRadioButton(self.groupShortage)
        self.rb_allowed.setGeometry(QtCore.QRect(20, 30, 101, 16))
        self.rb_allowed.setObjectName("rb_allowed")
        self.rb_notallowed = QtGui.QRadioButton(self.groupShortage)
        self.rb_notallowed.setGeometry(QtCore.QRect(110, 30, 61, 16))
        self.rb_notallowed.setObjectName("rb_notallowed")
        self.groupFunction = QtGui.QGroupBox(self)
        self.groupFunction.setGeometry(QtCore.QRect(590, 50, 271, 311))
        self.groupFunction.setObjectName("groupFunction")
        self.btn_Model = QtGui.QPushButton(self.groupFunction)
        self.btn_Model.setGeometry(QtCore.QRect(30, 30, 221, 41))
        self.btn_Model.setObjectName("btn_Model")
        self.btn_Optimization = QtGui.QPushButton(self.groupFunction)
        self.btn_Optimization.setGeometry(QtCore.QRect(30, 100, 221, 41))
        self.btn_Optimization.setObjectName("btn_Optimization")
        self.btn_Clear = QtGui.QPushButton(self.groupFunction)
        self.btn_Clear.setGeometry(QtCore.QRect(30, 170, 221, 41))
        self.btn_Clear.setObjectName("btn_Clear")
        self.btn_Close = QtGui.QPushButton(self.groupFunction)
        self.btn_Close.setGeometry(QtCore.QRect(30, 240, 221, 41))
        self.btn_Close.setObjectName("btn_Close")
        self.groupOutput = QtGui.QGroupBox(self)
        self.groupOutput.setGeometry(QtCore.QRect(20, 380, 841, 151))
        self.groupOutput.setObjectName("groupOutput")
        self.browser_output = QtGui.QTextBrowser(self.groupOutput)
        self.browser_output.setGeometry(QtCore.QRect(10, 20, 811, 121))
        self.browser_output.setObjectName("browser_output")
        self.groupShortage_2 = QtGui.QGroupBox(self)
        self.groupShortage_2.setGeometry(QtCore.QRect(370, 50, 211, 71))
        self.groupShortage_2.setObjectName("groupShortage_2")
        self.rb_allowed_2 = QtGui.QRadioButton(self.groupShortage_2)
        self.rb_allowed_2.setGeometry(QtCore.QRect(20, 30, 101, 16))
        self.rb_allowed_2.setObjectName("rb_allowed_2")
        self.rb_notallowed_2 = QtGui.QRadioButton(self.groupShortage_2)
        self.rb_notallowed_2.setGeometry(QtCore.QRect(110, 30, 101, 16))
        self.rb_notallowed_2.setObjectName("rb_notallowed_2")

        self.retranslateUi()
        #QtCore.QMetaObject.connectSlotsByName(Form)

    def retranslateUi(self):

        self.label_Model.setText("Probabilistic Model")
        self.groupModel.setTitle("Model")
        self.rb_EOI.setText("EOI")
        self.rb_EOQ.setText("EOQ")
        self.groupInput.setTitle("Input")
        self.label_2.setText("Item cost(C)")
        self.label_3.setText("Holding cost(H):")
        self.label_4.setText("Order cost(A):")
        self.label_5.setText("% of Time:")
        self.label_6.setText("% of Demand:")
        self.label_8.setText("$ unit")
        self.label_9.setText("$ / item year")
        self.label_10.setText("$ / order")
        self.label_11.setText("%")
        self.label_12.setText("%")
        self.groupShortage.setTitle("Shortage")
        self.rb_allowed.setText("unkown")
        self.rb_notallowed.setText("known")
        self.groupFunction.setTitle("Function")
        self.btn_Model.setText("Deterministic Model")
        self.btn_Optimization.setText("Optimization")
        self.btn_Clear.setText("Clear")
        self.btn_Close.setText("Exit")
        self.groupOutput.setTitle("Output")
        self.groupShortage_2.setTitle("Time / Demand")
        self.rb_allowed_2.setText("% of Time")
        self.rb_notallowed_2.setText("% of Demand")
