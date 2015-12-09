# -*- coding: utf-8 -*-

# Form implementation generated from reading ui file 'deterministic.ui'
#
# Created by: PyQt4 UI code generator 4.11.4
#
# WARNING! All changes made in this file will be lost!

import sip
import sys
import math
from PyQt4 import QtGui, QtCore, QtGui

class Deterministic(QtGui.QWidget):
    def __init__(self):
        super(Deterministic, self).__init__()
        
        self.setupUi()
        self.show()

    def setupUi(self):
        #self.setObjectName("Form")
        font = QtGui.QFont("Consolas")
        self.setFont(font)

        self.resize(878, 544)
        self.label_Model = QtGui.QLabel(self)
        self.label_Model.setGeometry(QtCore.QRect(20, 10, 211, 31))
        self.label_Model.setObjectName("label_Model")
        self.groupModel = QtGui.QGroupBox(self)
        self.groupModel.setGeometry(QtCore.QRect(20, 50, 271, 71))
        self.groupModel.setObjectName("groupModel")
        self.rb_EPI = QtGui.QRadioButton(self.groupModel)
        self.rb_EPI.setGeometry(QtCore.QRect(10, 30, 51, 16))
        self.rb_EPI.setObjectName("rb_EPI")
        self.rb_EPQ = QtGui.QRadioButton(self.groupModel)
        self.rb_EPQ.setGeometry(QtCore.QRect(70, 30, 51, 16))
        self.rb_EPQ.setObjectName("rb_EPQ")
        self.rb_EOI = QtGui.QRadioButton(self.groupModel)
        self.rb_EOI.setGeometry(QtCore.QRect(140, 30, 51, 16))
        self.rb_EOI.setObjectName("rb_EOI")
        self.rb_EOQ = QtGui.QRadioButton(self.groupModel)
        self.rb_EOQ.setGeometry(QtCore.QRect(200, 30, 51, 16))
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
        self.label_7 = QtGui.QLabel(self.groupInput)
        self.label_7.setGeometry(QtCore.QRect(20, 182, 141, 16))
        self.label_7.setObjectName("label_7")
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
        self.label_13 = QtGui.QLabel(self.groupInput)
        self.label_13.setGeometry(QtCore.QRect(400, 183, 141, 16))
        self.label_13.setObjectName("label_13")
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
        self.edit_shortagecost = QtGui.QLineEdit(self.groupInput)
        self.edit_shortagecost.setGeometry(QtCore.QRect(130, 180, 261, 21))
        self.edit_shortagecost.setObjectName("edit_shortagecost")
        self.groupShortage = QtGui.QGroupBox(self)
        self.groupShortage.setGeometry(QtCore.QRect(310, 50, 271, 71))
        self.groupShortage.setObjectName("groupShortage")
        self.rb_allowed = QtGui.QRadioButton(self.groupShortage)
        self.rb_allowed.setGeometry(QtCore.QRect(20, 30, 101, 16))
        self.rb_allowed.setObjectName("rb_allowed")
        self.rb_notallowed = QtGui.QRadioButton(self.groupShortage)
        self.rb_notallowed.setGeometry(QtCore.QRect(130, 30, 130, 16))
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

        self.retranslateUi()
        self.btn_Optimization.clicked.connect(self.optimization)

    def retranslateUi(self):
        self.setWindowTitle("Form")
        self.label_Model.setText("Deterministic Model")
        self.groupModel.setTitle("Model")
        self.rb_EPI.setText("EPI")
        self.rb_EPQ.setText("EPQ")
        self.rb_EOI.setText("EOI")
        self.rb_EOQ.setText("EOQ")
        self.groupInput.setTitle("Input")
        self.label_2.setText("Item cost(C)")
        self.label_3.setText("Holding cost(H):")
        self.label_4.setText("Order cost(A):")
        self.label_5.setText("Leadtime(L):")
        self.label_6.setText("Demand(D):")
        self.label_7.setText("shortage cost:")
        self.label_8.setText("$ unit")
        self.label_9.setText("$/item year")
        self.label_10.setText("$/order")
        self.label_11.setText("year")
        self.label_12.setText("item/year")
        self.label_13.setText("$/year")
        self.groupShortage.setTitle("Shortage")
        self.rb_allowed.setText("allowed(#2)")
        self.rb_notallowed.setText("not allowed(#1)")
        self.groupFunction.setTitle("Function")
        self.btn_Model.setText("Probabilistic Model")
        self.btn_Optimization.setText("최적화")
        self.btn_Clear.setText("초기화")
        self.btn_Close.setText("종료")
        self.groupOutput.setTitle("Output")

    def optimization(self):
        self.browser_output.clear()

        # getting value from line edit

        value_C = float(self.edit_C.text())
        value_H = float(self.edit_H.text())
        value_A = float(self.edit_A.text())
        value_L = float(self.edit_L.text())
        value_D = float(self.edit_D.text())
        
        if self.rb_allowed.isChecked():
            value_shortage = float(self.edit_shortagecost.text())

        if ((self.rb_EOQ.isChecked() | self.rb_EOI.isChecked()) & self.rb_notallowed.isChecked()) :
            value_Q     = math.sqrt((2*value_A*value_D)/value_H)
            value_T     = value_Q/value_D
            value_r     = value_D*value_L
            value_Imax  = value_Q
            value_total = (value_A*value_D)/value_Q + value_C*value_D + (value_H*value_Q)/2

            if self.rb_EOI.isChecked():
                self.browser_output.insertPlainText("EOI#1\n\n")
                self.browser_output.insertPlainText("T = "+str(value_T)+" (Items)\n")
                self.browser_output.insertPlainText("Imax = "+str(value_Imax)+" (Items)\n")
            elif self.rb_EOQ.isChecked():
                self.browser_output.insertPlainText("EOQ#1\n\n")
                self.browser_output.insertPlainText("Q = "+str(value_Q)+" (Items)\n")
                self.browser_output.insertPlainText("r = "+str(value_r)+" (Items)\n")

            
            self.browser_output.insertPlainText("total cost = "+str(value_total)+"($)")

        elif ((self.rb_EOQ.isChecked() | self.rb_EOI.isChecked()) & self.rb_allowed.isChecked()):
            self.browser_output.insertPlainText("EOQ | EOI & allowed")
        elif ((self.rb_EPQ.isChecked() | self.rb_EPI.isChecked()) & self.rb_notallowed.isChecked()):
            self.browser_output.insertPlainText("EPQ | EPI & notallwed")
        elif ((self.rb_EPQ.isChecked() | self.rb_EPI.isChecked()) & self.rb_allowed.isChecked()):
            self.browser_output.insertPlainText("EPQ | EPI & allowed")

    def clear(self):
        pass

    def close(self):
        sys.exit()